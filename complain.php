<html>
  <head>
    <!--Materialize Start-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  
    <!--ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Materialize ended -->
    <!--Let browser know website is optimized for mobile-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="complain/css/style.css">

    <style>
      
      form textarea {
        height:150px;
      }
      body{
        background: #1d1d29;
      }
  </style>
  
  </head>
	
	<body>

    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.js"></script>    

    <?php
      include('navbar.php');
    ?>
    <?php
    if(isset($_GET['car'])){  
      $car=$_GET['car'];
    }
    if(!isset($_SESSION['username']) && !isset($_GET['car'])){ 
    ?>  <script type="text/javascript">
          window.location.href='cars.php';
          alert("Login Required");
        </script>
      <?php
    }
    if(!isset($_SESSION['username'])){ 
    ?>  <script type="text/javascript">
          window.location.href='select.php?car=<?php echo $car; ?>';
          alert("Login Required");
        </script>
      <?php
    }
    if(!isset($_GET['car'])){?>
       <script type="text/javascript">
        window.location.href='cars.php';
        alert("Select A Car");
      </script> 
      <?php 
    }
  
    ?>

    <!-- Complain Form -->

    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

    <div class="container">

    <div id="mc_embed_signup">
      <form action="#" method="post" class="validate">

        <div id="mc_embed_signup_scroll">
          <div class="mc-field-group">

            <label for="carname">Car Name </label>
            <input type="text" value="<?php echo $car; ?>" name="t3" id="carname" required>

          </div>

          <div class="mc-field-group">

            <label for="heading">Complain Heading </label>
            <input type="text" value="" name="t1" class="" id="heading" required> 

          </div>

          <div class="mc-field-group">

            <label for="msg">Message </label>
            <textarea type="text" value="" name="t2" class="" id="msg" required></textarea> 

          </div>

          <input type="submit" value="Send" name="submit" class="button">

        </div>

      </form>      
    </div>
    </div>
		<!-- Complain Form Over -->
    <?php
    if(isset($_POST['submit'])){
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
      if ($conn->query($sql) === TRUE) { ?>
          <script type="text/javascript">
            window.location.href='index.php';
            alert("Complain registered successfully");
          </script> 
          
      <?php } 
      else {
          echo "Error: ". $sql ."<br>".$conn->error;
      }
      
    }
  ?>
  <?php
    include('footer.php');
  ?>

  </body>
</html>
