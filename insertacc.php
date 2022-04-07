<?php
define('HOST','localhost:3306');
define('USER','root');
define('PASS','');
define('DB','mis1');
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['mobile'];
$c_password=$_POST['c_password'];

//echo $pass;
//echo $c_password;
if($pass!=$c_password){
	?>
	<script type="text/javascript">
		window.location.href='2.php';
		alert("Password not matched");		
	</script>
	<?php
	//header("2.php");  
}
else{

	if (isset($_POST['t4']) OR $_POST['t5'] OR $_POST['t6'] ){
		$add1 = $_POST['t4'];
		$add2 = $_POST['t5'];
		$add3 = $_POST['t6'];	
	}
	else{
		$add1 ="";
		$add2 ="";
		$add3 =""; 
	}



	$sql = "INSERT INTO customer(Username,Password,Email,Address1,Address2,Address3,Phone)VALUES ('$user','$pass','$email','$add1','$add2','$add3','$phone')";
	$retval = mysqli_query($conn,$sql);
	//$numberAffectedRow = mysqli_num_rows($retval);
	if($retval){
		session_start();
		$_SESSION['username']=$user;	
		?>
		<script type="text/javascript">
			window.location.href='index.php';
			//alert("Password not matched");		
		</script>
		<?php
    	//header("Location:index.php");
    	//echo "Account is created";
	} 
	else {
    	//echo "Error: " . $sql . "<br>" . $conn->error;
	}

}

	mysqli_close($conn);
?>