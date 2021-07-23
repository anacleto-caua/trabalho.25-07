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
    <link rel="stylesheet" href="../assets/style/default.css">
    <link rel="stylesheet" href="../assets/style/head-nav-foot.css">
</head>
<body>
    <?php
        include "../assets/iframes/header_in.html";
        include "../assets/iframes/nav_in.html";
    ?>

    <section>
        <h1>Atualizar Leitor</h1>
        <h2>Quem você deseja atualizar?</h2>
        <form action="atualizar.php">        
        <table>
            <tr>
                <th>
                    Antigo CPF:
                </th>
                <td>
                    <input type="text" name="cpf">
                </td>
            </tr>
        </table>

        <h2>Com quais dados você deseja atualizar?</h2>
        <table>
            <tr>
                <th>
                    CPF:
                </th>
                <td>
                    <input type="text" name="novo_cpf">
                </td>
            </tr>
            <tr>
                <th>
                    Matricula:
                </th>
                <td>
                    <input type="text" name="nova_matri">
                </td>
            </tr>
            <tr>
                <th>
                    Nome:
                </th>
                <td>
                    <input type="text" name="novo_nome">
                </td>
            </tr>
            <tr>
                <th>
                    Senha:
                </th>
                <td>
                    <input type="password" name="nova_senha">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Atualizar">        
                </td>
            </tr>
        </table>

        <div class="campo">
        </div>

        </form>
        <?php
            if(isset($_GET['cpf']) && isset($_GET['novo_cpf']) && isset($_GET['novo_nome']) && isset($_GET['nova_senha']) && isset($_GET['nova_matri'])){
                $cpf = $_GET['cpf'];
                $nova_matri = $_GET['nova_matri'];
                $novo_cpf = $_GET['novo_cpf'];
                $novo_nome = $_GET['novo_nome'];
                $nova_senha = $_GET['nova_senha'];


                $query="UPDATE `leitor` SET `cpf`='$novo_cpf', `matricula`='$nova_matri', `nome`='$novo_nome',  `senha`='$nova_senha' WHERE `cpf`='$cpf'";
                $MySQLi->query($query);
            }
        ?>
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>

</body>
</html>