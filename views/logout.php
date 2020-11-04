<?php
//require "header.php";


session_start();
session_destroy();
$_SESSION["logged_in"] = "";

header("location: http://brandonmpiper.com/App");


//require "footer.php";
?>

