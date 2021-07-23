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
    <link rel="stylesheet" href="../assets/style/head-nav-foot.css">
    <link rel="stylesheet" href="../assets/style/default.css">
</head>
<body>
    <?php
        include "../assets/iframes/header_in.html";
        include "../assets/iframes/nav_in.html";
    ?>

    <section >
        <h1>Deseja ver qual Publicação?</h1>
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
                    Exemplares
                </th>
                <th>
                    Tipo
                </th>
                <th>
                    Título
                </th>
                <th>
                    Autor
                </th>
                <th>
                    Editora
                </th>
                <th>
                    Publicação
                </th>
                <th>
                    Páginas
                </th>
                <th>
                    Língua
                </th>
            </thead>
        <?php
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            }else{
                $id = 1;
            }

            $query="SELECT * from `publicacao` WHERE `id_pub`='$id'";
            $result = $MySQLi->query($query) or die ("ERRO");
            $result = $result->fetch_assoc();

            if(gettype($result) != 'boolean' && gettype($result) != 'NULL'){

                $id = $result['id_pub'];
                $exem = $result['exemplares'];
                $tipo = $result['tipo'];
                $titulo = $result['titulo'];
                $fk_autor = $result['fk_id_autor'];
                $fk_editora = $result['fk_id_editora'];
                $data_pub = $result['data_publicacao'];
                $paginas = $result['paginas'];
                $lingua = $result['lingua'];
            }else{
                $id = "NONE";
                $exem = "NONE";
                $tipo = "NONE";
                $titulo = "NONE";
                $fk_autor = "NONE";
                $fk_editora = "NONE";
                $data_pub = "NONE";
                $paginas = "NONE";
                $lingua = "NONE";
            }

            echo "
            <tbody>
                <tr>
                    <td>
                        $id
                    </td>
                    <td>
                        $exem
                    </td>
                    <td>
                        $tipo
                    </td>
                    <td>
                        $titulo
                    </td>
                    <td>
                        $fk_autor
                    </td>
                    <td>
                        $fk_editora
                    </td>
                    <td>
                        $data_pub
                    </td>
                    <td>
                        $paginas
                    </td>
                    <td>
                        $lingua
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