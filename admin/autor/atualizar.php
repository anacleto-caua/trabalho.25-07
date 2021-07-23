<?php
    include '../security.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Administrador</title>
    <link rel="stylesheet" href="../assets/style/default.css">
    <link rel="stylesheet" href="../assets/style/head-nav-foot.css">
</head>
<body>
    <?php
        include "../assets/iframes/header_in.html";
        include "../assets/iframes/nav_in.html";
    ?>

    <section>
        <h1>Atualizar Autor</h1>
        <h2>Quem você deseja atualizar?</h2>
        <form action="atualizar.php">        
        <table>
            <tr>
                <td>
                    Antigo Id:
                </td>
                <td>
                    <input type="number" name="id">
                </td>
            </tr>
        </table>
            <h2>Com quais dados você deseja atualizar?</h2>

        <table>
            <tr>
                <td>
                    Id:
                </td>
                <td>
                    <input type="number" name="novo_id">
                </td>
            </tr>
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                    <input type="text" name="nome_novo">
                </td>
            </tr>
            <tr>
                <td>
                    Pseudonimo: 
                </td>
                <td>
                    <input type="text" name="pseu_novo">
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
            if(isset($_GET['novo_id']) && isset($_GET['nome_novo']) && isset($_GET['pseu_novo'])){
                $id=$_GET['id'];

                $novo_id=$_GET['novo_id'];
                $nome_novo=$_GET['nome_novo'];
                $pseu_novo=$_GET['pseu_novo'];

                $query="UPDATE `autor` SET `id_autor`='$novo_id', `nome`='$nome_novo', `pseudonimo`='$pseu_novo' WHERE `id_autor`='$id'";
                $MySQLi->query($query);
            }
        ?>
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>

</body>
</html>