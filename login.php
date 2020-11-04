<?php


session_start();
include_once "config/Database.php";


// Instantiate DB & connect
$database = new Database();
$db = $database->connect();


$user     = htmlspecialchars( $_POST["user"] );
$password = htmlspecialchars( $_POST["password"] );


try{
	$stmt = $db->prepare( "SELECT * FROM `users` WHERE user='$user' AND password='$password'" );
	$stmt->execute();

	//$count = $stmt->rowCount();
	//while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
	//	print_r( $row );
	//}
        $row = $stmt->fetch( PDO::FETCH_ASSOC );

}
catch( PDOException $e ){
	echo "Error : ".$e->getMessage();
}


$_SESSION["id"] = $row["id"];
$_SESSION["profile"] = $row["profile"];
$_SESSION["first"] = $row["first"];
$_SESSION["last"] = $row["last"];
$_SESSION["user"] = $row["user"];
$_SESSION["email"] = $row["email"];
$_SESSION["password"] = $row["password"];
$_SESSION["background"] = $row["background"];
$_SESSION["background_2"] = $row["background_2"];


$user_id = $row["id"];


// Get user posts
try{
        $stmt = $db->prepare( "SELECT * FROM posts WHERE user_id='$user_id'" );
        $stmt->execute();

        $count = $stmt->rowCount();
	$posts = [];


        while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
		print_r( $row );
		array_push( $posts, $row["post"] );
        }
        //$row = $stmt->fetch( PDO::FETCH_ASSOC );

	echo "<br><br>POSTS = ";
	print_r( $posts );


	echo "<br><br>SESSION = ";
	$_SESSION["posts"] = $posts;
//	print_r( $_SESSION["posts"] );
}
catch( PDOException $e ){
        echo "Error : ".$e->getMessage();
}




if( $_SESSION["user"] != null && $_SESSION["password"] != null ){
	$_SESSION["logged_in"] = "true";
	header("location: http://brandonmpiper.com/App/views/profile.php");
}
else{
	header("location: http://brandonmpiper.com/App/views/login.php");
}
?>
