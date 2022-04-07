
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
		.input-field label{
   			font-size: 15px;
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
	    input[type=Password]{ 
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

	<div class="container">

		<div class="row"></div>
		<div class="row"></div>
		<div class="row"></div>
		<div class="row"></div>
		<div class="row"></div>

		<div class="row">
		<form class="col s12" method="POST" action="insertacc.php">

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">account_box</i>
					<input placeholder="Username" id="username" name="username" type="text" class="form-control input-lg validate"  oninvalid="this.setCustomValidity('Username must be of atleast 3 characters')" oninput="setCustomValidity('')" required minlength="3" autofocus>
					<label for="username">Username</label>
				</div>
			

			
		        <div class="input-field col s6">
		        	<i class="material-icons prefix">contact_mail</i>
				   	<input placeholder="Email-Id" type="email" name="email" id="email" class="form-control input-lg validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="this.setCustomValidity('Enter valid email of proper format')" oninput="setCustomValidity('')" required>
				   	<label for="email">Email-Id</label>	
			    </div>
	    	</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">keyboard</i>
					<input placeholder="Password" id="password" name="password" type="password" class="form-control input-lg validate" minlength="8" maxlength="1024" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninvalid="this.setCustomValidity('Password must contain atleast 1 of each: Number, Small alphabet and Capital alphabet')" oninput="setCustomValidity('')" required>
					<label for="password">Password</label>
				</div>
			

			
				<div class="input-field col s6">
					<i class="material-icons prefix">keyboard</i>
					<input placeholder="Confirm" id="c_password" name="c_password" type="password" class="form-control input-lg validate" minlength="8" maxlength="1024" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninvalid="this.setCustomValidity('Password must contain atleast 1 of each: Number, Small alphabet and Capital alphabet')" oninput="setCustomValidity('')" required>
					<label for="c_password">Confirm password</label>
				</div>
			</div>

			<div class="row">
                <div class="input-field col s6">
					<i class="material-icons prefix">contact_mail</i>                    
                    <input placeholder="Age" id="age" name="age" type="number" class="form-control input-lg validate" required min="16" max="100">
                    <label for="age">Age</label>
                </div>
            
                <div class="input-field col s6">
					<i class="material-icons prefix">contact_phone</i>
                    <input placeholder="Contact" id="mobile" name="mobile" type="number" class="form-control input-lg validate" min="1000000000" max="9999999999" required>
                    <label for="mobile">Mobile</label>
                </div>
            </div>

            <div class="center-text">
   				<button class="btn waves-effect waves-light" type="submit" name="submit" style="align-items: right;">Submit</button>
      		</div>
		
		</form>
		</div>
	</div>
	
	<?php
  		include('footer.php');
	?>
</body>
</html>