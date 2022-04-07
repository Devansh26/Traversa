 <?php
//echo "string";
define('HOST','localhost:3306');
define('USER','root');
define('PASS','');
define('DB','mis1');
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

$user = $_POST['username'];
$pass = $_POST['password'];	
//$page = $_POST['page']; 

if(isset($_POST['car'])){  
  $car=$_POST['car'];
}
if(isset($_POST['page'])){ 
  $page=$_POST['page'];
}
//echo "".$user;
//echo "".$page;

$sql = "SELECT Username FROM customer where Username='".$user."' AND Password='".$pass."'";
$retval = mysqli_query($conn,$sql);
//$row = mysqli_fetch_array($retval);
$numberAffectedRow = mysqli_num_rows($retval);
if($numberAffectedRow>0){
	//$result="true";
	//echo "true";
	session_start();
	$_SESSION['username']=$user;
  if($car!=NULL){?>
    <script type="text/javascript">
        window.location.href='select.php?car=<?php echo $car; ?>';
        //alert("Login Required");
    </script> 
    <?php 
  }else if($page!=NULL){ ?>
    <script type="text/javascript">
        window.location.href='<?php echo $page; ?>';
        //alert("Login Required");
    </script> 
    <?php 
  }
  else{
    header("Location:index.php");  
  }  
}	
else{
   	?><script type="text/javascript">
   		window.location.href='index.php';
   		alert("Wrong Username/password");
   	</script>
   	<?php
      //echo "Wrong";
    	//header("Location:index.php");
    	//echo("Login unsuccessfully");
}
mysqli_close($conn);
?>