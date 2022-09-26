<?php
include_once("php/db_connect.php");
session_start();
if (empty($_SESSION['adminID'])) {
    header("location:index.php");
}
else{
    session_destroy();
    header("location:index.php");
}
?>