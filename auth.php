<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: masuk.php");
exit(); }
?>
