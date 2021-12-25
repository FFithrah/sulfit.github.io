<?php

session_start();
if(!isset($_SESSION['Nama'])){
    header("location:index.php");
}
?>