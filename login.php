<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/images/icons/IFET-logo.ico" type="image/x-png">
    <link rel="stylesheet" href="assets/style/default.css">
    <link rel="stylesheet" href="assets/style/head-foot.css">
    <link rel="stylesheet" href="assets/style/login.css">
</head>
<body>

    <?php
        include "assets/iframe/header.html";
        include "assets/iframe/login-sticker.html";
    ?>
    
    <article>
        <h2>Insira suas credenciais a seguir:</h2>
        
        <p>cpf: root-user </p>
        <p>senha: admin </p>
        <p>da pra entrar como aluno e funcionario com as mesmas credenciais.</p>

        <table>
            <form action="server/login-test.php" method="POST">
                <tr>
                    <td class="range" colspan="2">

                        <div class="radio-input">
                            <input type="radio" id="leitor" name="ocupacao-in" value="leitor">
                            <label for="leitor">Leitor</label>
                        </div>
                        <br>
                        <div class="radio-input">
                            <input type="radio" id="funcionario" name="ocupacao-in" value="funcionario" checked>
                            <label for="funcionario">Funcionário</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <div class="campo">
                        <td>
                            CPF:
                        </td>
                        <td>
                            <input type="text" name="cpf-in" placeholder="cpf">
                        </td>
                    </div>
                </tr>

                <tr>
                    <div class="campo">
                        <td>
                            SENHA:
                        </td>
                        <td>
                            <input type="password" name="senha-in" placeholder="senha">
                        </td>
                    </div>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="ENVIAR">
                    </td>
                </tr>
            </form>
        </table>
    </article>

    <?php include "assets/iframe/footer.html"; ?>
        
    <script src="assets/scripts/random/random-background.js"></script>
    <script src="assets/scripts/random/random-phrase.js"></script>

</body>
</html>