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
    <link rel="stylesheet" href="../assets/style/head-nav-foot.css">
    <link rel="stylesheet" href="../assets/style/default.css">
    <link rel="stylesheet" href="../assets/style/var.css">
</head>
<body>
    <?php
        include "../assets/iframes/header_in.html";
        include "../assets/iframes/nav_in.html";
    ?>

    <section >
        <h1>Deseja ver qual Autor?</h1>
        <form action="acessar.php">
            <div class="campo">
                Id:
                <input type="number" name="id">
            </div>
            <div class="campo">
                <input type="submit" value="Enviar">
            </div>
        </form>

        <table>
            <thead>
                <th>
                    Id
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Pseudônimo
                </th>
            </thead>
        <?php
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            }else{
                $id = 1;
            }
            $query="SELECT * from `autor` WHERE `id_autor`='$id'";
            $result = $MySQLi->query($query) or die ("ERRO");

            $result = $result->fetch_assoc();

            if(gettype($result) != 'boolean' && gettype($result) != 'NULL'){

                $id = $result['id_autor'];
                $pseu = $result['pseudonimo'];
                $nome = $result['nome'];
            }else{
                $id = 'NONE';
                $pseu = 'NONE';
                $nome = 'NONE';
            }

            echo "
            <tbody>
                <tr>
                    <td>
                        $id
                    </td>
                    <td>
                        $pseu
                    </td>
                    <td>
                        $nome
                    </td>
                </tr>
            </tbody>
            ";

        ?>
            
        </table>
            
    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>
</body>
</html>