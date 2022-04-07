<?php
  //session_start();
	$car=$_GET['car'];
	define('HOST','localhost:3306');
	define('USER','root');
	define('PASS','');
	define('DB','mis1');
	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

	$sql="select * from car where Car_name ='".$car."'";
	$r = mysqli_query($con,$sql);
	if (!$r) {
    	printf("Error: %s\n", mysqli_error($con));
    	exit();
	}
	$res = mysqli_fetch_array($r);

	//echo "<img src='".$res[Car_img1]."' width='"900"' height='"500"'>";
?>

<html>
<head>

      
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <link rel="stylesheet" href="Car/cards/css/style.css">

      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.css'>  
<style>
.topspace{
            margin:100px auto;max-width:800px;
          }
        
  .submit {
  width:40%;
  padding:5px 10px;
  font-size: 12px;
  letter-spacing:1px;
  background:#dd4545;
  height:50px;
  text-transform:uppercase;
  letter-spacing:1px;
  color:#FFF;
  border:2px solid #b43838;
  -webkit-transition:all .1s ease-in-out;
  -moz-transition:all .1s ease-in-out;
  -ms-transition:all .1s ease-in-out;
  -o-transition:all .1s ease-in-out;
  transition:all .1s ease-in-out;}

#contact .container form .submit:hover {
  color:#FFF;
  border:2px solid #dd4545;
  background: #b43838;
  cursor:pointer;
}
.card-title{
  background: black;
}

</style>      

      
</head>
<body>
<?php
  include('navbar.php');
?>
<?php 
 echo "<h3><font color=#fff><center>$res[Car_name] CAR</center></font></h3>";
$j=1;
?>
<div class="container">
  
<center>
<?php
for($i=1;$i<4;$i++){ 
  ?>
  <div class="row">
    <div class="col s5">
      <div class="card">
       <div class="card-image">
         <img src="<?php echo $res['Car_img'.$i.'']; ?>" height="200" width="200"/>
       </div> 
        </div>
      </div>
   </div>
    <div class="col s1"></div>

  <?php
  }
  echo "<h5>TODAY'S OFFER FOR $res[Car_name] IS  <font color=#fff><b>$res[price] </b></font>RS PER HOUR</h5><br><br>";
?>
</center>
  
<form name="f1" method="post" action="book.php?car=<?php echo $car; ?>">
  <center>
  <button name="send" type="submit" class="submit">BOOK NOW!</button>
  <br><br><br>
  <a href="review2.php?car=<?php echo $car; ?>">
    <button name="send" type="button" class="submit">GIVE YOUR REVIEW</button>
  </a>
</center>
</form>
<?php
//define('HOST','localhost:3306');
//define('USER','root');
//define('PASS','');
//define('DB','mis1');
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
$sql = "SELECT carcategory , carname , Hreview , review , Dat , Tim FROM reviews WHERE carname='".$car."'";
//mysqli_select_db('mis1');
$retval = mysqli_query( $conn, $sql );
if(! $retval ){
  die('Could not get data: ' . mysqli_error());
}
echo "<h5><font color=#fff><center>REVIEWS FOR $res[Car_name]</center></font></h5>";
while($row = mysqli_fetch_array($retval))
{
    echo  "<b>{$row['Hreview']}<br></b>".
          "At Time : {$row['Tim']} <br> ".
          "REVIEW: {$row['review']} <br> ".
          "CAR CATEGORY :{$row['carcategory']}<br>". 
          "CAR NAME:{$row['carname']}<br>".
          "<hr width=1000></hr>";
} 
mysqli_close($conn);
?>

</div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>

<?php
  include('footer.php');
?>

</body>
</html>



