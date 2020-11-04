<?php
$target_dir = "../uploads";
$target_file = $target_dir . basename( $_FILES["file"]["name"] );




if( isset($_POST["submit"]) ){
	if( move_uploaded_file( $_FILES["file"]["tmp_name"], $target_file) ){
    		echo "The file has been uploaded";
	}
	else{
		echo "Error: file could not be uploaded.";
	}
}




echo "FILES = ";
print_r( $_FILES );
//header("location: http://brandonmpiper.com/App");
?>

