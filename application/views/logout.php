<?php
    session_start();
    // $_SESSION['logged_in']=false;
    unset($_SESSION['id']);
    header("Location:/social_media/index.php/home/");
    exit;
?>