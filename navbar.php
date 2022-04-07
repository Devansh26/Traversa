<?php
session_start();
if(isset($_GET['car'])){  
  $car=$_GET['car'];
}
else{
	$car=NULL;
	$car1="cars.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.css'>
</head>
<style type="text/css">
	nav {
  		color: #212121;
  		background-color: #212121;
  		width: 100%;
  		height: 56px;
  		line-height: 56px;
	}
	nav a {
  		color: #212121;
	}
	.container{
		
	}
  .bgmain{
    font-family: 'Aguafina Script', cursive;
    font-style: italic;
    font-size: 22px;
  }
</style>
<body>
	
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.js"></script>

	<nav>
    <div class="nav-wrapper">
      	 
	    <ul id="nav-mobile" class="left hide-on-med-and-down">
	    	<li><a href="#"><div class="bgmain">Traversa</div></a></li>
	    	<li><a href="index.php">Home</a></li>
	      <li><a href="cars.php">Cars</a></li>                   
	      
	    </ul>
      	
        <?php if(!isset($_SESSION['username'])){ ?>
        	<?php if(!isset($_GET['car'])){ ?>
        		<ul id="nav-mobile" class="right hide-on-med-and-down">
        	    	<li><a href="login1.php?page=<?php echo $car1; ?>"><span class="glyphicon glyphicon-log-in">
            	    </span>Login</a></li>
                	<li><a href="2.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
            	</ul>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="complain.php">COMPLAINT</a></li>        
              </ul>
        	<?php }else{ ?>
    	        <ul id="nav-mobile" class="right hide-on-med-and-down">
        	    	<li><a href="login1.php?car=<?php echo $car; ?>"><span class="glyphicon glyphicon-log-in">
            	    </span>Login</a></li>
                	<li><a href="2.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
            	</ul>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="complain.php?car=<?php echo $car; ?>">COMPLAINT</a></li>        
              </ul>
            <?php } ?>
        <?php }else{ ?>
        	<?php if(!isset($_GET['car'])){ ?>
   	        	<ul id="nav-mobile" class="right hide-on-med-and-down">
               		<li><a><?php echo $_SESSION['username']; ?></a></li>
                	<li><a href="logout.php?page=<?php echo $car1; ?>">LogOut</a></li>
            	</ul>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="complain.php">COMPLAINT</a></li>        
              </ul>
            <?php }else{ ?>
            	<ul id="nav-mobile" class="right hide-on-med-and-down">
               		<li><a><?php echo $_SESSION['username']; ?></a></li>
                	<li><a href="logout.php?car=<?php echo $car; ?>">LogOut</a></li>
            	</ul>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="complain.php?car=<?php echo $car; ?>">COMPLAINT</a></li>        
              </ul>
            <?php } ?>
        <?php } ?> 
      	</ul>
    	</div>
  	</nav>
</body>
</html>