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
        
        <h1>Apagar Funcionário</h1>
        <h2>Qual funcionário você deseja apagar?</h2> 
        
        <form action="apagar.php" method="get">
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
                    <td colspan="2">
                        <input type="submit" value="Apagar">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_GET['cpf'])){
                $cpf=$_GET['cpf'];
                $query = "DELETE FROM `funcionario` WHERE `cpf`='$cpf'";
                $MySQLi->query($query);
            }
        ?>
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>
 
</body>
</html>