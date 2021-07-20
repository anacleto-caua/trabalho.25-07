<?php

function redirectLog()
{
    echo "Login não aceito";
    echo "<br>Redirecionando...";
    header('Location: ../login.php');
}

include_once "conexao.php";

if(isset( $_POST['cpf-in']) && isset( $_POST['senha-in']) && isset( $_POST['ocupacao-in'])){
    $ocup = $_POST['ocupacao-in'];
    $cpf = $_POST['cpf-in'];
    $senha = $_POST['senha-in'];

}else{
    redirectLog();
}

$query = "SELECT * FROM `$ocup` WHERE cpf='$cpf' AND senha='$senha'";
$result = $MySQLi->query($query) or die (redirectLog());

if(gettype($result) == "boolean" || gettype($result) == null){
    redirectLog();
}else{
    $result = $result->fetch_assoc();
    if($result['cpf']==null || $result['senha']==null)
    {
        redirectLog();
    }else{
        setcookie('login-type', $ocup, time()+3600, '/', 'localhost');
        setcookie('login-cpf', $cpf, time()+3600, '/', 'localhost');

        if($ocup == 'funcionario'){
            header("Location: ../admin/index.php");
        }else{
            header("Location: ../");

        }
        echo '<br>';
        echo '<a href="../login.php">Retornar à página de login</a>';
    }
    
}
?>