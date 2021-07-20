<?php

    if($_COOKIE['login-type'] != 'funcionario'){
        header("Location: ../");
    }

?>