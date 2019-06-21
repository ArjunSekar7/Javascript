<?php
$host = "localhost:3306" ;
$dbusername = "root";
$dbpassword = "password";
$dbname = "aspire";
$username = $_POST['username'];
$uspassword = $_POST['uspassword'];
echo "Success";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
	//If any one of above wrong to show error msg
	echo "Success1";

    	$select = "SELECT uname,password from login where uname=? and password=? Limit 1 "; 
    	//prepare statement
		$stmt = $conn->prepare($select);
		$stmt->bind_param("ss",$username,$uspassword);
		$stmt->execute();
		$stmt->bind_result($username,$uspassword);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		 if ($rnum==1 )
		{
			
			echo "log in  successful";
		}
		else
		{
			echo "plz register or your user name/password is incorrect";
		}
		$stmt->close();
		$conn->close();
	
    





?>
