<?php
  include('navbar.php');
  //$ddate = $_POST["t5"];
  //$time2 = $_POST["t6"];
  //$carcategory = $_POST["t7"];
?>
<?php
	$name=$_POST["t1"];
	$email=$_POST["t2"];
	$adate = $_POST["t3"];
	$time1 = $_POST["t4"];
	$car=$_POST["car"];
	$hours = $_POST["t5"];
	$username = "root";	
	$servername="localhost:3306";
	$password = "";
	$dbname = "mis1";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql2="select * from car where Car_name ='".$car."'";
	$r1 = mysqli_query($conn,$sql2);
	$res1 = mysqli_fetch_array($r1);
	//while($row1 = mysqli_fetch_array($r1)){
	$cat=$res1['category'];
	//}
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO final(name,email,adate,time1,carcategory,hours)VALUES ('$name','$email','$adate','$time1','$cat','$hours')";
	//header ("index.html");
	if ($conn->query($sql) === TRUE) {} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$sql="select price from car where Car_name ='".$car."'";
	$r = mysqli_query($conn,$sql);
	if (!$r) {
    	printf("Error: %s\n", mysqli_error($con));
    	exit();
	}
	$res = mysqli_fetch_array($r);
	//while($row = mysqli_fetch_array($r)){
	$price=$res['price'];
	//}
	?>
<html>
<head>
	<style type="text/css"></style>
	<link rel="stylesheet" href="final/css/style.css">
</head>
	<body>
		<br><br><br><br><br><br><br>
		<div class="box gallery">
			<div class="card">
		    	<div class="background">
			      <div class="column col1"></div>
			      <div class="column col2"></div>
			      <div class="column col3"></div>
			      <div class="column col4"></div>
			      <div class="column col5"></div>
		    	</div>  
			    <a href="#" class="overlay">
			    </a>
			    <a href="#">
			      <i class="fa fa-camera-retro"></i>
			    </a>
			    <a class="thumb" href="#">
			    <div class="info">
			        <h2>
			          <a href="#">
			          	CONGRATULATIONS! <br>
			          	YOUR CAR IS BOOKED <br>
			          	<?php echo($name) ?>
			          	For <?php echo($car)//echo("Standard")?><br>
			          	Total Price : <?php echo(($hours*$price))?>
			          	<p><b>NOTE: DETAILS WILL BE SEND TO YOUR EMAILID</b></p>
			          </a>
			        </h2>
			        <div class="foot">
			          <i class="line"></i>
			          <span class="date"><p><span id="datetime"></span></p></span>
			          <a href="https://www.facebook.com/profile.php?id=100007079898061" target="_blank" class="social">
			            <i class="fa fa-facebook"></i>
			          </a>
			          <a href="https://twitter.com/RohanVaidya64" target="_blank" class="social">
								<i class="fa fa-twitter"></i>
			          </a>
			        </div>
			    </div>
		    </div>
		</div>
		<script>
			var dt = new Date();
			document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
		</script>
	</body>
</html>
<?php		
$total=$hours * $price;
	//require_once "vendor/autoload.php";
//include 'PHPMailer';
require('PHPMailer-master\class.phpmailer.php');
require ('PHPMailer-master\PHPMailerAutoload.php');
//include("PHPMailer-master\class.smtp.php"); 
$mail = new PHPMailer;

//$mail->Debugoutput = 'html';
//Enable SMTP debugging. 
//$mail->SMTPDebug = 3;         
//$mail->Debugoutput = 'html';                      
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "tls";
$mail->Port = 587;  
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;    


//$mail->SMTPKeepAlive = true;
//$mail->Mailer = "smtp";                                                       
//Provide username and password     
$mail->Username = "traversacompany@gmail.com";                 
$mail->Password = "traversa123";                           
//If SMTP requires TLS encryption then set it
                          
//Set TCP port to connect to 


$mail->From = "traversacompany@gmail.com";
$mail->FromName = "Traversa";

$mail->addAddress($email,"Traversa");

$mail->isHTML(true);

$mail->Subject = "Traversa";
$mail->Body = "YOUR CAR IS BOOKED SUCCESSFULLY <br>
				Car: $car <br>
				Price: $total
";


if($mail->send()) 
{
    //echo "Message has been sent successfully";
} 
else 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
<?php
  include('footer.php');
?>