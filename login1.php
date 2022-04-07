<?php
  //session_start();
  if(isset($_GET['car'])){  
    $car=$_GET['car'];
  }
  else{
    $car=NULL;
  }
  if(isset($_GET['page'])){  
    $page=$_GET['page'];
  }
  else{
    $page=NULL;
  }
?>
<?php
  include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="login/css/style.css">
  <link rel="stylesheet" href="Car/cards/css/style.css">
  
  <style type="text/css">
    .inner-screen{
      width: 800px;
      height: 340px;
      background: #1abc9d;
      margin: 0px auto;
      padding-top: 80px;
    }
    .outer-screen:after{
      content: "";
      background: #13202c;
      width: 400px;
      height: 88px;
      position: absolute;
      bottom: 0px;
      border-radius: 0px 0px 20px 20px;
      -moz-border-radius: 0px 0px 20px 20px;
      -webkit-border-radius: 0px 0px 20px 20px;
    }

  </style>  
</head>

<body>

<div class="stand">
  <div class="outer-screen">
    <div class="inner-screen">
      <form action="customerl.php" method="POST">
        <div class="form">
          <input type="text" name="username" class="zocial-dribbble" placeholder="Username" />
          <input type="password" name="password" placeholder="Password" />
          <input type="hidden" name="page" value="<?php echo $page; ?>">
          <input type="hidden" name="car" value="<?php echo $car; ?>">
          <input type="submit" value="Login" />
        </div> 
      </form>
    </div> 
  </div> 
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<?php
  include('footer.php');
?>

</body>

</html>
