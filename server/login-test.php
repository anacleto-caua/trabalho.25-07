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
        if($ocup == 'funcionario'){
            echo 'Seja bem vindo '.$result['nome'].' que trabalha como '.$result['ocupacao'].'.';
        }else{
            echo 'Seja bem vindo '.$result['nome'].', um dos nossos leitores.';
        }
        echo '<br>';
        echo '<a href="../login.php">Retornar à página de login</a>';
    }
    
}
?>