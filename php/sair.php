<?php

    session_start();

    unset($_SESSION['usuariologado']);
    unset($_SESSION['senhalogado']);
    session_destroy();


    header("Location: ../index.php")

?>