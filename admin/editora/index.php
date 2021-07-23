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
        <h1>Editora</h1>
        <h2>O que essa tabela contém?</h2> 
        <p>
            Essa tabela reúne todos as editoras, que possuem livros nessa biblioteca.
        </p>
        <h2>Colunas</h2>
        <ul>
            <li>
                id_editora
            </li>
            <li>
                nome
            </li>
            <li>
                representante
            </li>
        </ul>

    </section>

    <?php
        include "../assets/iframes/footer.html";
    ?>
</body>
</html>