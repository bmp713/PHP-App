<?php


include_once "config/Database.php";


// Instantiate DB & connect
$database = new Database();
$db = $database->connect();


try{
        $stmt = $db->prepare( "DELETE FROM users WHERE id='4'" );
        $stmt->execute();
}
catch( PDOException $error ){
        echo "Error : ".$error->getMessage();
}




header("location: http://brandonmpiper.com/App");
?>

