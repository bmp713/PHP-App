<?php
session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "includes/vendor/autoload.php";
include_once "config/Database.php";


// Instantiate DB & connect
$database = new Database();
$db = $database->connect();


$user_id = $_SESSION["id"];
$post  = $_POST["post"];


//echo "POST = ";
//print_r( $_POST );

//echo "<br><br>SESSION = ";
//print_r( $_SESSION );
//echo "<br><br>";

try{
	$stmt = $db->prepare("
		INSERT INTO posts ( user_id, post ) VALUES ( '$user_id', '$post' );
	");
	$stmt->execute();
}
catch( PDOException $error ){
	echo "Error : ".$error->getMessage();
}
array_push( $_SESSION["posts"], $post );



header("location: ../index.php");
?>
