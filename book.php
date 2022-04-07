

<!DOCTYPE html>
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

    <style type="text/css">
    	body{
    		padding: 5%;
    		padding-top: 10%;
    	}
      .center-text {text-align: center}
      canvas {
       position: absolute;
        top: 0;
        left: 0;

    }
    body {
        font-family: Helvetica sans-serif;
        padding: 0;
        margin: 0;
        background-color: #222;
        overflow-x : hidden;
        -webkit-user-select: none;
          -moz-user-select: none;
          -o-user-select: none;
          -ms-user-select: none;
          user-select: none;
    }
    .container{}
    input[type=text]{ 
        color:  #F0FFFF;
    }
    input[type=email]{ 
        color:  #F0FFFF;
    }
    input[type=number]{ 
        color:  #F0FFFF;
    }
    </style>



</head>
<body>
  <!-- Background -->   
    <canvas id="canvas"></canvas>
    <script  src="registerbg/js/index.js"></script>
  <!-- Background Over-->
  <?php
    include('navbar.php');
  ?>
  <?php
  $car=$_GET['car'];
  
  if(!isset($_SESSION['username'])){ 
  ?> <script type="text/javascript">
      window.location.href='select.php?car=<?php echo $car; ?>';
      alert("Login Required");
    </script>
    <?php
  }
?>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>

<div class="container">

<div class="row">
    <form class="col s12" method="POST" action="final.php">
    	<div class="row">
        	<div class="input-field col s6">
        		<i class="material-icons prefix">account_box</i>
          		<input placeholder="First Name" name="t1" id="first_name" type="text"  required >
          		<label for="first_name">First Name</label>
        	</div>

        	<div class="input-field col s6">
        		<i class="material-icons prefix">account_box</i>
          		<input placeholder="Last Name" id="last_name" type="text" >
          		<label for="last_name">Last Name</label>
        	</div>

      	</div>

	    <div class="row">
	    	<div class="input-field col s12">
		        <i class="material-icons prefix">email</i>
		    	<input type="email" name="t2" placeholder="Enter Email-Id" class="validate" required>
		    	<label for="email">Email-Id</label>	
	    		
	    	</div>
	    </div>


      	<div class="row">
	    	<div class="input-field col s6">
        		<i class="material-icons prefix">date_range</i>
	      		<input placeholder="Starting date" id="starting_date" name="t3"  type="text" class="datepicker validate" required>
	      		<label for="starting_date">Starting date</label>
	      	</div>

	      	<div class="input-field col s6">
        		<i class="material-icons prefix">access_time</i>
	      		<input placeholder="Starting time" name="t4"  type="text" class="timepicker validate" required>
	      		<label for="starting_date">Starting time</label>
	      	</div>
	    </div>

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">contact_mail</i>                    
            <input placeholder="Number of hours" id="hours" name="t5" type="number" class="form-control input-lg validate" required min="1" max="100">
            <label for="hours">Number of hours</label>
          </div>
        </div>
      
      <input type="hidden" name="car" value="<?php echo $car; ?>">
      <div>
      <center>
   		 <button class="btn waves-effect waves-light" type="submit" name="submit" style="align-items: right;">Submit</button>
      </center>
      </div>


    </form>
</div>

</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>



<!--Date and Time Pickers-->
<script>
	const starting_date = document.querySelector('[name="t3"]');
	M.Datepicker.init(starting_date,{
		format:'dd-mm-yyyy'
	});

	const starting_time = document.querySelector('[name="t4"]');
	M.Timepicker.init(starting_time,{});


</script>

<?php
  include('footer.php');
?>


</body>
</html>