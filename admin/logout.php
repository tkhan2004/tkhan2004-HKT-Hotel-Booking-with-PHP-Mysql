<?php
    require_once('inc/essential.php');
    session_start();
    session_destroy();
    redirect('index.php');
?>