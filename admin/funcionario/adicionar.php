<?php
    include '../security.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário - Área do Administrador</title>
    <link rel="stylesheet" href="../assets/style/default.css">
    <link rel="stylesheet" href="../assets/style/head-nav-foot.css">
</head>
<body>
    <?php
        include "../assets/iframes/header_in.html";
        include "../assets/iframes/nav_in.html";
    ?>

    <section>

        <?php
            if(isset($_GET['cpf']) && isset($_GET['senha']) && isset($_GET['nome']) && isset($_GET['ocup'])){
                $cpf = $_GET['cpf'];
                $senha= $_GET['senha'];
                $nome = $_GET['nome'];
                $ocup = $_GET['ocup'];

                $query = "INSERT INTO `funcionario` (`cpf`, `senha`, `nome`, `ocupacao`) VALUES ('$cpf', '$senha', '$nome' , '$ocup')";
                $MySQLi->query($query) or die ("ERRO");
            }
        ?>

        <h1>Adicionar Funcionário</h1>

        <form action="adicionar.php" method="get">
            <table>
                <tr>
                    <th>
                        CPF:
                    </th>
                    <td>
                        <input type="text" name="cpf">
                    </td>
                </tr>
                <tr>
                    <th>
                        Senha:
                    </th>
                    <td>
                        <input type="password" name="senha">
                    </td>
                </tr>
                <tr>
                    <th>
                        Nome:
                    </th>
                    <td>
                        <input type="text" name="nome">
                    </td>
                </tr>
                <tr>
                    <th>
                        Ocupação:
                    </th>
                    <td>
                        <input type="text" name="ocup">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>

</body>
</html>