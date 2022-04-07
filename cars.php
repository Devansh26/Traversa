<!-- Navigation Bar Start -->
<?php
  include('navbar.php');
  //include('userurl.php');
?>
<?php
  //session_start();
  
  define('HOST','localhost:3306');
  define('USER','root');
  define('PASS','');
  define('DB','mis1');
  
  $conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

?>
<html>
<head>
  <title>Traversa</title>
      <link rel="stylesheet" href="Car/cards/css/style.css">      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
      <style type="text/css">
          .topspace{
            margin:100px auto;max-width:800px;
          }
        
        .container{
          width: 100%;
        }

      </style>      
</head>
<body>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="assets/js/jquery-3.1.1.min.js"></script>

  <br>
  <br>
  <div class="container">
    <h1>ECONOMY</h1>
    <!-- horizontal -->
    <div class="flip">
        <div class="front" style="background-image: url(Cars/Economy/swiftdesire/main2.jpg)">
           <h1 class="text-shadow">SWIFT DZIRE</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=Swift Dzire">Traversa</a></h2>
           <p>you might want to get used to appreciation and applause with this car</p>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(Cars/Economy/i10/main2.jpg)">
           <h1 class="text-shadow">I10</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=I10">Traversa</a></h2>
           <p>From the modern and stylish exterior to premium and quality interior, i10 is a car like no other.</p>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(Cars/Economy/wagonr/main2.jpg)">
           <h1 class="text-shadow">WAGON R</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=Wagon R">Traversa</a></h2>
           <p>Be it the stylish alloys, refined side skirts or a racy spoiler, the WagonR is designed with utmost attention.</p>
        </div>
    </div>
    <br>
    <br>

    <!-- vertical -->
    <h1>STANDARD</h1>
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url(Cars/Standard/hondacity/main.jpg)">
           <h1 class="text-shadow">HONDA CITY</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=Honda City">Traversa</a></h2>
           <p>It is an unchallenged legacy that has time and again reinvented itself.</p>
        </div>
    </div>
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url(Cars/Standard/ertiga/main.jpg)">
           <h1 class="text-shadow">ERTIGA</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=Ertiga">Traversa</a></h2>
           <p>From having to make your way through narrow lanes to following your heart on a beautiful beach.</p>
        </div>
    </div>
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url(Cars/Standard/duster/main2.jpg">
           <h1 class="text-shadow">DUSTER</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=Duster">Traversa</a></h2>
           <p>The Renault DUSTER is your license to go beyond the boundaries.</p>
        </div>
    </div>

    <br>    
    <!-- horizontal -->
    <h1>LUXURY</h1>
    <div class="flip">
        <div class="front" style="background-image: url(Cars/Luxury/bmw/main.jpg)">
           <h1 class="text-shadow">BMW</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=BMW">Traversa</a></h2>
           <p>Presenting BMW Financial Services – the most flexible and efficient.</p>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(Cars/Luxury/nissan/main.jpg)">
           <h1 class="text-shadow">ALTIMA</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=Altima">Traversa</a></h2>
           <p>If another vehicle is detected in the blind spot area, an indicator.</p>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(Cars/Luxury/mercedes/main.jpg)">
           <h1 class="text-shadow">MERCEDES</hi>
        </div>
        <div class="back">
           <h2><a href="select.php?car=Mercedes SLK">Traversa</a></h2>
           <p>one of the media elements and related information visible.</p>
        </div>
    </div>

  </div>

</div>
<script  src="cards/js/index.js"></script>
  
  <style>
    .submit {
  width:20%;
  padding:5px 10px;
  font-size: 12px;
  letter-spacing:1px;
  background:#dd4545;
  height:40px;
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
  cursor:pointer;}
  </style>
  <br><br><br>
<form method="post" action="review2.php">
  <center>
  <button name="send" type="submit" class="submit">GIVE YOUR REVIEW</button>
</center>
</form>
<?php

$sql = 'SELECT carcategory , carname , Hreview , review , Dat , Tim FROM reviews LIMIT 0 , 3';
//mysql_select_db('mis1');
$retval = mysqli_query($conn,$sql);
if(! $retval ){
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
while($row = mysqli_fetch_array($retval)){
    echo  "<b>{$row['Hreview']}<br></b>".
          "At Time : {$row['Tim']} <br> ".
          "REVIEW: {$row['review']} <br> ".
          "CAR CATEGORY :{$row['carcategory']}<br>". 
          "CAR NAME:{$row['carname']}<br>".
          "<center><hr width=1000></hr></center>";
} 
mysqli_close($conn);
?>
<br>
<form method="post" action="allreviews.php">
  <center>
    <button name="send" type="submit" class="submit">READ MORE REVIEWS</button>
  </center>
</form>
<?php
  include('footer.php');
?>
</body>
</html>
