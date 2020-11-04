<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "includes/vendor/autoload.php";
include_once "config/Database.php";


// Instantiate DB & connect
$database = new Database();
$db = $database->connect();


$first    = htmlspecialchars( $_POST["first"] );
$last     = htmlspecialchars( $_POST["last"] );
$email	  = htmlspecialchars( $_POST["email"] );
$user 	  = htmlspecialchars( $_POST["user"] );
$password = htmlspecialchars( $_POST["password"] );





// Validation replaced by required
/*
if( empty($first) || empty($last) || empty($email) || empty($user) || empty($password) ){
	echo "Please enter all fields.";
	exit(0);
}


if( filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ){
	echo "Valid email<br>";
}
else{
	echo "Invalid email<br>";
	exit(0);
}
*/




// Insert new user into database
try{
        $stmt = $db->prepare("
		SELECT * FROM users WHERE user='$user'
        ");
        $stmt->execute();


        if( $stmt->rowCount() ){
                //echo "$user already exists.";
		$_SESSION["message"] = "$user already exists.";

		//header("location: http://brandonmpiper.com/App/views/register.php");
		exit(0);
        }
	else{
		$stmt = $db->prepare("
			INSERT INTO users (first, last, email, user, password, profile, background, background_2 )
			VALUES ( '$first', '$last', '$email', '$user', '$password', '$profile', '$background', '$background_2' );
		");
		$stmt->execute();
		sendEmail();




		//header("location: ../index.php");
	}
}
catch( PDOException $error ){
	echo "Error : ".$error->getMessage();
	header("location: ../index.php");
}





// Send confirmation email
function sendEmail(){
	echo "sendEmail()<br>";


	$first    = htmlspecialchars( $_POST["first"] );
	$last     = htmlspecialchars( $_POST["last"] );
	$email    = htmlspecialchars( $_POST["email"] );
	$user     = htmlspecialchars( $_POST["user"] );
	$password = htmlspecialchars( $_POST["password"] );


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
	$mail->FromName = $first;
	$mail->addAddress( "bmp713@yahoo.com", "Brandon Piper");
	$mail->addCC( $email );
	$mail->isHTML( true );
	$mail->Subject = "Message";

	$mail->Body = "
		<h2>Thank you for registering!</h2>
		Here is your account information<br><br>
		Name:		$last, $first<br>
		Email:		$email<br>
		Username:	$user<br>
		Password:	$password
	";
	try{
		$mail->send();
		echo "Message has been sent successfully";
                $_SESSION["message"] = "Thank you for registering!";
	}
	catch( Exception $e ){
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
}



?>
