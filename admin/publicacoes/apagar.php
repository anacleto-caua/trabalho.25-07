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
        
        <h1>Apagar Publicação</h1>
        <h2>Qual publicação você deseja apagar?</h2> 
        
        <form action="apagar.php" method="get">
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
                    <td colspan="2">
                        <input type="submit" value="Apagar">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $query = "DELETE FROM `publicacao` WHERE `id_pub`='$id'";
                $MySQLi->query($query) or die("ERRO");
            }
        ?>
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>
 
</body>
</html>