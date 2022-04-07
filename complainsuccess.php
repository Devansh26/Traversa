<?php
	$hcomplain=$_POST["t1"];
	$complain=$_POST["t2"];
	$car=$_POST["t3"];
	$servername = "localhost:3306";
	$username = "root";	
	$password = "";
	$dbname = "mis1";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO complainbox(carname,Hcomplain,complain,Dat,Tim)VALUES ('$car','$hcomplain','$complain',CURDATE(),CURTIME())";
	if ($conn->query($sql) === TRUE) {
    	echo "Your COMPLAIN successfully";
	} 
	else {
    	echo "Error: ". $sql ."<br>".$conn->error;
	}
?>