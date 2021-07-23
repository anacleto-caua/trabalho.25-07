<?php
    include '../security.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicação - Área do Administrador</title>
    <link rel="stylesheet" href="../assets/style/default.css">
    <link rel="stylesheet" href="../assets/style/head-nav-foot.css">
</head>
<body>
    <?php
        include "../assets/iframes/header_in.html";
        include "../assets/iframes/nav_in.html";
    ?>

    <section>
        <h1>Atualizar Publicação</h1>
        <h2>Quem você deseja atualizar?</h2>
        <form action="atualizar.php" method="get">        
            <table>
                <tr>
                    <th>
                        Antigo Id:
                    </th>
                    <td>
                        <input type="number" name="id_antigo">
                    </td>
                </tr>
            </table>

            <h2>Com quais dados você deseja atualizar?</h2>

            <table>
                <tr>
                    <th>
                        Id:
                    </th>
                    <td>
                        <input type="number" name="id">
                    </td>
                </tr>
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

        <?php
            if(isset($_GET['id_antigo']) && isset($_GET['id']) && isset($_GET['exem']) && isset($_GET['tipo']) && isset($_GET['titulo']) && isset($_GET['fk_autor']) && isset($_GET['fk_editora']) && isset($_GET['data_pub']) && isset($_GET['pag']) && isset($_GET['lingua'])){
                
                $id_antigo = $_GET['id_antigo'];
                
                $id = $_GET['id'];
                $exem = $_GET['exem'];
                $tipo = $_GET['tipo'];
                $titulo = $_GET['titulo'];
                $fk_autor = $_GET['fk_autor'];
                $fk_editora = $_GET['fk_editora'];
                $data_pub = $_GET['data_pub'];
                $pag = $_GET['pag'];
                $lingua = $_GET['lingua'];

                $query="UPDATE `publicacao` SET `id_pub`='$id', `exemplares`='$exem', `tipo`='$tipo', `titulo`='$titulo', `fk_id_autor`='$fk_autor', `fk_id_editora`='$fk_editora', `data_publicacao`='$data_pub', `paginas`='$pag', `lingua`='$lingua' WHERE `id_pub`='$id_antigo';";
                $MySQLi->query($query) or die ("ERRO");
            }
        ?>
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>

</body>
</html>