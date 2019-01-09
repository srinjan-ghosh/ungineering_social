<?php
    session_start();
    // $_SESSION['logged_in']=false;
    unset($_SESSION['user_id']);
    header("Location:homepage_submit.php");
    exit;
?>
