<?php
    include '../security.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autor - Área do Administrador</title>
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
            if(isset($_GET['pseudonimo']) && isset($_GET['nome'])){
                $pseu = $_GET['pseudonimo'];
                $nome = $_GET['nome'];

                $query = "INSERT INTO `autor` (`pseudonimo`, `nome`) VALUES ('$pseu', '$nome')";
                $MySQLi->query($query) or die ("ERRO");
            }
        ?>

        <h1>Adicionar Autor</h1>

        <form action="adicionar.php" method="get">
            <table>
                <tr>
                    <th>
                        Pseudônimo
                    </th>
                    <td>
                        <input type="text" name="pseudonimo">
                    </td>
                </tr>
                <tr>
                    <th>
                        Nome
                    </th>
                    <td>
                        <input type="text" name="nome">
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