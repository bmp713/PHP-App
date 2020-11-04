<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "includes/vendor/autoload.php";
include_once "config/Database.php";


// Database connection
$database = new Database();
$db = $database->connect();


$user = $_POST["user"];
$email = $_POST["email"];


try{
        $stmt = $db->prepare("SELECT * FROM users WHERE user='$user'");
	$stmt->execute();

        if( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
                $first = $row["first"];
                $last = $row["last"];
                $email = $row["email"];
		$user = $row["user"];
		$password = $row["password"];
	}
}
catch( PDOException $error ){
	echo "Error : ".$error->getMessage();
}


//print_r( $row );
//print_r( $_POST );


$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Username = "bmp713@gmail.com";
$mail->Password = "#Welcome310";
$mail->From = $email;
$mail->FromName = "$first $last";
$mail->addCC( $email );
$mail->isHTML(true);
$mail->Subject = "Message";


$mail->Body = "
	<h2>Here is your password and account information</h2>
	Name:           $last, $first<br>
	Email:          $email<br>
	Username:       $user<br>
	Password:       $password
	<br><br>
	You can change your password under \"Settings.\"
";
$mail->send();




header("location: ../index.php");
?>
