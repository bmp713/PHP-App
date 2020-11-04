<?php
session_start();


include_once "config/Database.php";


// Database connection
$database = new Database();
$db = $database->connect();


$user = $_SESSION["user"];
$password = $_SESSION["password"];
$email = $_SESSION["email"];
$profile = $_SESSION["profile"];
$background = $_SESSION["background"];
$background_2 = $_SESSION["background_2"];


if( $_POST["password"] != null ){
	$password = $_POST["password"];
	$_SESSION["password"] = $password;
}
if( $_POST["email"] != null ){
        $email = $_POST["email"];
        $_SESSION["email"] = $email;
}
if( $_POST["profile"] != null ){
	$profile = $_POST["profile"];
	$_SESSION["profile"] = $profile;
}
if( $_POST["background"] != null ){
        $background = $_POST["background"];
        $_SESSION["background"] = $background;
}
if( $_POST["background_2"] != null ){
        $background_2 = $_POST["background_2"];
        $_SESSION["background_2"] = $background_2;
}


echo $password."<br>";
echo $profile."<br>";
echo $background."<br>";
echo $background_2."<br>";


echo "POST = ";
print_r( $_POST );
echo "<br>SESSION = ";
print_r( $_SESSION );


try{
        $query = $db->prepare("UPDATE users SET password='$password', email='$email', profile='$profile', background='$background', background_2='$background_2' WHERE user='$user'");
	$query->execute();
}
catch( PDOException $error ){
        echo "Error : ".$error->getMessage();
}




header("location: http://brandonmpiper.com/App/views/profile.php");
?>


