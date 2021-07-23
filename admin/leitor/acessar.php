<?php
    include '../security.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitor - Área do Administrador</title>
    <link rel="stylesheet" href="../assets/style/head-nav-foot.css">
    <link rel="stylesheet" href="../assets/style/default.css">
</head>
<body>
    <?php
        include "../assets/iframes/header_in.html";
        include "../assets/iframes/nav_in.html";
    ?>

    <section >
        <h1>Deseja ver qual leitor?</h1>
        <form action="acessar.php">
            <div class="campo">
                CPF:
                <input type="text" name="cpf">
            </div>
            <div class="campo">
                <input type="submit" value="Enviar">
            </div>
        </form>

        <table>
            <thead>
                <th>
                    CPF
                </th>
                <th>
                    Matrícula 
                </th>
                <th>
                    Senha
                </th>
                <th>
                    Nome
                </th>
            </thead>
        <?php
            if(isset($_GET['cpf'])){
                $cpf=$_GET['cpf'];
            }else{
                $cpf = 'root-user';
            }

            $query="SELECT * from `leitor` WHERE `cpf`='$cpf'";
            $result = $MySQLi->query($query) or die ("ERRO");
            $result = $result->fetch_assoc();

            if(gettype($result) != 'boolean' && gettype($result) != 'NULL'){

                $cpf = $result['cpf'];
                $matricula = $result['matricula'];
                $nome = $result['nome'];
                $senha = $result['senha'];
            }else{
                $cpf = 'NONE';
                $matricula = 'NONE';
                $senha = 'NONE';
                $nome = 'NONE';
            }

            echo "
            <tbody>
                <tr>
                    <td>
                        $cpf
                    </td>
                    <td>
                        $matricula
                    </td>
                    <td>
                        $senha
                    </td>
                    <td>
                        $nome
                    </td>
                </tr>
            </tbody>
            ";

        ?>
            
        </table>
            
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>
</body>
</html>