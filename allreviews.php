<?php
  include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="Car/cards/css/style.css">
</head>
<body>


<?php

  define('HOST','localhost:3306');
  define('USER','root');
  define('PASS','');
  define('DB','mis1');
  
  $conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

$sql = 'SELECT carcategory , carname , Hreview , review , Dat , Tim FROM reviews';

$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($retval))
{
    echo "<br>CAR CATEGORY :{$row['carcategory']}<br>". 
    "CAR NAME :{$row['carname']}<br>".
       "REVIEW HEADING :{$row['Hreview']}<br> ".
         "REVIEW: {$row['review']} <br> ".
         "DATE: {$row['Dat']} <br> ".
         "TIME : {$row['Tim']} <br> ".
         "<center><hr width=1000></hr></center>";
} 
mysqli_close($conn);
?>
<?php
  include('footer.php');
?>
</body>
</html>