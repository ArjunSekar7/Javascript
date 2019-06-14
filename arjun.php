<?php echo"Hiii Arjun"; ?>
<?php
if(isset($_POST["submit"])){
$user = "root";
$pass = "password";
$db = "aspire";

echo "Success1";

function customError($errno, $errstr,$error_file,$error_line){
 	echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
    echo "<br />";
    echo "Terminating PHP Script";
      
    die();
}

set_error_handler("customError");

$con = mysqli_connect("172.24.177.103", $user, $pass, $db);

echo "Success2";

$imagename=$_FILES["uimage"]["temp_name"]; 

echo "Success3";

$insert_image="INSERT INTO image VALUES('$imagename')";

if(mysql_query($insert_image)){

	echo "Image Inserted into database";
}

}
?>
<html>
<head> </head>
<body>
<form action="" method="post">
<input type="file" name="uimage"/>
<input type="submit" name="submit" value="Click here"/> 
</form>
</body>
</html>

