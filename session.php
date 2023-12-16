<?php
session_start();
if(!isset($_SESSION['UserEmail'])){
    header("Location:index.php");
}

?>