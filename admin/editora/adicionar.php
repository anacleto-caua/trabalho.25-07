<?php
    include '../security.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editora - Área do Administrador</title>
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
            if(isset($_GET['nome']) && isset($_GET['representante'])){
                $nome = $_GET['nome'];
                $representante = $_GET['representante'];

                $query = "INSERT INTO `editora` (`nome`, `representante`) VALUES ('$nome', '$representante')";
                $MySQLi->query($query) or die ("ERRO");
            }
        ?>

        <h1>Adicionar Editora</h1>

        <form action="adicionar.php" method="get">
            <table>
                <tr>
                    <th>
                        Nome
                    </th>
                    <td>
                        <input type="text" name="nome">
                    </td>
                </tr>
                <tr>
                    <th>
                        Representante
                    </th>
                    <td>
                        <input type="text" name="representante">
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