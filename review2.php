<?php
      include('navbar.php');
?>
<?php 
  //session_start();

if(isset($_GET['car'])){  
  $car=$_GET['car'];
}


if(!isset($_GET['car'])){?>
     <script type="text/javascript">
      window.location.href='cars.php';
      alert("Select A Car");
    </script> 
  <?php 
}

if(!isset($_SESSION['username'])){ 
  ?> <script type="text/javascript">
      window.location.href='select.php?car=<?php echo $car; ?>';
      alert("Login Required");
    </script>
    <?php
}
?>
<html>
<head>
  <link rel="stylesheet" href="complain/css/style.css">
</head>
	<style>
    
    form textarea {
        height:150px;
      }
      body{
        background: #1d1d29;
      }
	</style>

	<body>
		
  <br>
<h1>
  <center>
    <font color="#fff">
     GIVE YOUR REVIEW
    </font>
  </center>
</h1>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.js"></script>    

    

    <!-- Complain Form -->

    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<div class="container">

    <div id="mc_embed_signup">
      <form action="success.php" method="post" class="validate">

        <div id="mc_embed_signup_scroll">
          <div class="mc-field-group">

            <label for="carname"></label>
            <input type="text" value="<?php echo $car; ?>" name="t4" id="carname" required>

          </div>

          <div class="mc-field-group">

            <label for="heading">REVIEW HEADING </label>
            <input type="text" value="" name="t1" class="" id="heading" required> 

          </div>

          <div class="mc-field-group">

            <label for="msg">MESSAGE </label>
            <textarea type="text" value="" name="t2" class="" id="msg" required></textarea> 

          </div>

          <input type="submit" value="Send" name="submit" class="button">

        </div>

      </form>      
    </div>
    </div>


<?php
    include('footer.php');
  ?>
</body>
</html>
