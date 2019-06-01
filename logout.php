<?php
error_reporting(0);
session_start();

$_SESSION["login"] = false;

header("Location:  index.php");

?>