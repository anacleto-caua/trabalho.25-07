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
            if(isset($_GET['exem']) && isset($_GET['tipo']) && isset($_GET['titulo']) && isset($_GET['fk_autor']) && isset($_GET['fk_editora']) && isset($_GET['data_pub']) && isset($_GET['pag']) && isset($_GET['lingua'])){
                $exem = $_GET['exem'];
                $tipo = $_GET['tipo'];
                $titulo = $_GET['titulo'];
                $fk_autor = $_GET['fk_autor'];
                $fk_editora = $_GET['fk_editora'];
                $data_pub = $_GET['data_pub'];
                $pag = $_GET['pag'];
                $lingua = $_GET['lingua'];

                $query = "INSERT INTO `publicacao` (`exemplares`, `tipo`, `titulo`, `fk_id_autor`, `fk_id_editora`, `data_publicacao`, `paginas`, `lingua`) VALUES ('$exem', '$tipo', '$titulo', '$fk_autor', '$fk_editora', '$data_pub', '$pag', '$lingua')";
                $MySQLi->query($query) or die ("ERRO");
            }
        ?>

        <h1>Adicionar Publicação</h1>

        <form action="adicionar.php" method="get">
            <table>
                <tr>
                    <th>
                        Exemplares
                    </th>
                    <td>
                        <input type="number" name="exem">
                    </td>
                </tr>
                <tr>
                    <th>
                        Tipo
                    </th>
                    <td>
                        <input type="text" name="tipo">
                    </td>
                </tr>
                <tr>
                    <th>
                        Título
                    </th>
                    <td>
                        <input type="text" name="titulo">
                    </td>
                </tr>
                <tr>
                    <th>
                        FK Autor
                    </th>
                    <td>
                        <input type="number" name="fk_autor">
                    </td>    
                </tr>
                <tr>
                    <th>
                        FK Editora
                    </th>
                    <td>
                        <input type="number" name="fk_editora">
                    </td>
                </tr>
                <tr>
                    <th>
                        Data Publicação
                    </th>
                    <td>
                        <input type="date" name="data_pub">
                    </td>
                </tr>
                <tr>
                    <th>
                        Páginas
                    </th>
                    <td>
                        <input type="number" name="pag">
                    </td>
                </tr>
                <tr>
                    <th>
                        Língua
                    </th>
                    <td>
                        <input type="text" name="lingua">
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