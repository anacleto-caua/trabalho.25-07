<?php
    var_dump($GLOBALS);
    var_dump($login);

    if(isset($GLOBALS['login']['ocupacao'])){
        echo "FUNCIONÁRIO LOGADO"; 
    }

?>