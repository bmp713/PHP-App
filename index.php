<?php
session_start();


if( isset($_SESSION["logged_in"]) ){
        header("location: http://brandonmpiper.com/App/views/profile.php");
}
else{
        header("location: http://brandonmpiper.com/App/views/login.php");
}
?>
