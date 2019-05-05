<?php
    require'connection.php';
    $conn=startconnection();
    session_start();
    session_destroy();
    header("location: index.php");
?>