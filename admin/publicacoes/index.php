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
    <link rel="stylesheet" href="../assets/style/var.css">
</head>
<body>
    <?php
        include "../assets/iframes/header_in.html";
        include "../assets/iframes/nav_in.html";
    ?>

    <section>
        <h1>Publicação</h1>
        <h2>O que essa tabela contém?</h2> 
        <p>
            Essa tabela reúne todos os livros, artigos cientifícos e outros arquivos impresos nessa biblioteca.
        </p>
        <h2>Colunas</h2>
        <ul>
            <li>
                id_pub
            </li>
            <li>
                exemplares
            </li>
            <li>
                tipo
            </li>
            <li>
                titulo
            </li>
            <li>
                fk_id_autor
            </li>
            <li>
                fk_id_editora
            </li>
            <li>
                data_publicacao
            </li>
            <li>
                paginas
            </li>
            <li>
                lingua
            </li>
        </ul>

    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>
</body>
</html>