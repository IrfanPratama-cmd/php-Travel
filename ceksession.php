<?php 
    session_start();
    //echo "username session : ".$_SESSION['username']."<br>";
    //echo "level session : ".$_SESSION['level']."<br>";
    if(!isset($_SESSION['username']))
    //exit;
    header('Location: login.php');
?>