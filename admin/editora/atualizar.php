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
        <h1>Atualizar Editora</h1>
        <h2>Quem você deseja atualizar?</h2>
        <form action="atualizar.php">        
        <table>
            <tr>
                <th>
                    Antigo Id:
                </th>
                <td>
                    <input type="number" name="id">
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
                    <input type="number" name="novo_id">
                </td>
            </tr>
            <tr>
                <th>
                    Nome:
                </th>
                <td>
                    <input type="text" name="nome_novo">
                </td>
            </tr>
            <tr>
                <th>
                    Representante: 
                </th>
                <td>
                    <input type="text" name="representante_novo">
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
            if(isset($_GET['novo_id']) && isset($_GET['nome_novo']) && isset($_GET['representante_novo'])){
                $id=$_GET['id'];

                $novo_id=$_GET['novo_id'];
                $nome_novo=$_GET['nome_novo'];
                $repre_novo=$_GET['representante_novo'];

                $query="UPDATE `editora` SET `id_editora`='$novo_id', `nome`='$nome_novo', `representante`='$repre_novo' WHERE `id_editora`='$id'";
                $MySQLi->query($query);
            }
        ?>
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>

</body>
</html>