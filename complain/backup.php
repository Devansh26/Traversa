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

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <style>
      
      #contact {width:100%; height:100%; margin 0 auto; background: #000000; }

      .container {width:960px; height:auto; margin: 0 auto; padding: 50px 0;}

      #contact .container form input,
      #contact .container form textarea {
        width:97.4%;
        height:30px;
        padding:5px 10px;
        font-size: 12px;
        color:#999;
        letter-spacing:1px;
        background: #FFF;
        border:2px solid #FFF;
        margin-bottom:25px;
        -webkit-transition:all .1s ease-in-out;
        -moz-transition:all .1s ease-in-out;
        -ms-transition:all .1s ease-in-out;
        -o-transition:all .1s ease-in-out;
        transition:all .1s ease-in-out;
      }

      #contact .container form input:focus,
      #contact .container form textarea:focus {
        border:2px solid #dd4545;
        color:#999;
      }

      #contact .container form textarea {
        height:150px;
      }

      #contact .container form .submit {
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
          cursor:pointer;
        }

        #contact .container form .required {
          color:#b43838;
        }
        .nav a{
          font-size: 15px;
        }
  </style>
  
  </head>
	
	<body>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Rent-a-Car</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="Car/cars.php">Cars</a></li>                    
                    <li><a href="complain.php">COMPLAIN</a></li>
                </ul>
          
              <?php
                if(!isset($_SESSION['username'])){ ?>
                <ul class="nav navbar-nav navbar-right">
                  <li><a  data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in">
                  </span> Login</a></li>
                  <li><a  data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
                </ul>
                <?php }else{ ?>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a><?php echo $_SESSION['username']; ?></a></li>
                  <li><a href="logout.phpcar=<?php echo $car; ?>">LogOut</a></li>
                  </ul>
                <?php } ?> 
                
             
            </div>
        </div>
    </nav>

		<section id="contact">
      <br>
      <h1>
        <center>
          <font color="#fff">
            COMPLAIN BOX
          </font>
        </center>
      </h1>

      <div class="container">

        <form name="htmlform" method="post" action="complainsuccess.php">

          <input type="text" name="t3" placeholder="CAR NAME" required>          
          <input  type="text" name="t1" placeholder="COMPLAIN HEADING" required>          
          <textarea name="t2" placeholder="MESSAGE" required ></textarea>          
          <center>
            <button name="send" type="submit" class="submit">Submit</button>
          </center>  

        </form>
       
      </div>

    </section>

  </body>
</html>
