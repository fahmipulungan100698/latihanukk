<?php
    session_start();

    if($_SESSION['is_login'] == false){
        header('location:index.php');
    }

?>