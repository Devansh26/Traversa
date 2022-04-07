<?php
	$hreview=$_POST["t1"];
	$review=$_POST["t2"];
	$servername = "localhost:3306";
	$username = "root";	
	$password = "";
	$dbname = "mis1";
	$carname = $_POST["t4"];
	session_start();
	$_SESSION['username'];
	$carcategory = "Standard";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO Reviews(carcategory,carname,Hreview,Review,Dat,Tim)VALUES ('$carcategory','$carname','$hreview','$review',CURDATE(),CURTIME())";
	if ($conn->query($sql) === TRUE) { ?>
    	//echo "Review is send successfully";
    	<script type="text/javascript">
            window.location.href='index.php';
            alert("Complain registered successfully");
        </script> 
	<?php } 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>