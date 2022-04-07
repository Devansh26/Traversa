<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Traversa</title>
  
  <link href="login/css/mdb.min.css" rel="stylesheet">
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Car Trade Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Custom Theme files -->
  <link href="firstpageassets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
  <link href="firstpageassets/css/style.css" type="text/css" rel="stylesheet" media="all">   
  <link href="firstpageassets/css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->     
  <link rel="stylesheet" href="firstpageassets/css/flexslider.css" type="text/css" media="screen" />  <!-- flexslider-CSS -->  
  <link rel="stylesheet" href="firstpageassets/css/chocolat.css" type="text/css" media="screen"> 
  <!-- //Custom Theme files --> 
  <!-- js -->
  <script src="firstpageassets/js/jquery-2.2.3.min.js"></script>  
  <!-- //js -->

  <link href="//fonts.googleapis.com/css?family=Aguafina+Script" rel="stylesheet">
  
<style type="text/css">
  .w3ls-banner{ 
    background:url(firstpageassets/images/12.jpg)no-repeat center bottom;
  }
  .services{
    background: url(firstpageassets/images/13.jpg)no-repeat center fixed;
  }
  hr{
    color: black;
  }
  .blogbg{
    color :white;
    font-style: italic;
    font-family:  Helvetica;
  }
</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    
    <script type="text/javascript" src="login/js/popper.min.js"></script>
    <script type="text/javascript" src="login/js/mdb.min.js"></script>

  <!-- banner -->
  <div id="home" class="w3ls-banner "> 
    <!-- header -->
    <div class="header-w3layouts"> 
      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Car Trade</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1 class="w3lslogo"><a href="index.php">TV<span></span></a></h1>
          </div> 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
              <li><a class="page-scroll" href="#home" data-hover="Home">Home</a></li> 
              <li><a class="page-scroll" href="#about" data-hover="About">About</a></li>    
              <li><a class="page-scroll" href="#gallery" data-hover="Gallery">Gallery</a></li>
              <li><a class="page-scroll" href="#review" data-hover="Reviews">Reviews</a></li>
              <li><a class="page-scroll" href="#contact" data-hover="Contact">Contact</a></li>
              <li><a class="page-scroll" href="complain.php" data-hover="Complain">Complaint</a></li>
              <li><a class="page-scroll" href="cars.php" data-hover="Cars">Cars</a></li>
              <?php
                  if(isset($_SESSION['username'])){ ?>
                    <li><a><?php echo $_SESSION['username']; ?></a></li>
                    <li><a class="page-scroll" href="logout.php" data-hover="LogOut">LogOut</a></li>
                <?php }else{ ?>
                <li><a class="page-scroll" href="login1.php" data-hover="Login">Login</a></li>
              <?php } ?>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
        <!-- /.Navigation -->
    </div>  
    <!-- //header -->

    <!-- banner-text -->
    <div class="banner-text">  
      <div class="container">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="banner-w3lstext">  
                <h2>Car On Rent</h2>
                <p>Traversa is a car renting website that rents a car to user without a chauffer Thus providing customer the independency to drive his or her rented car</p>
              </div>
            </li>
            <li>
              <div class="banner-w3lstext">  
                <h3>Cars Available </h3>
                <p>The cars are categorized in three major divisions economy, standard and luxury the customers can select cars according to their budgets.</p>
              </div>
            </li>
            <li>
              <div class="banner-w3lstext">  
                <h3>Select.Rent.Go</h3>
                <p>Select your Desired Car , Rent the chosen car , Enjoy the Ride</p>
              </div>
            </li>
          </ul> 
        </div>    
        <a href="2.php" class="wthree-btn btn-6" >Register Now<span></span></a>   
      </div> 
    </div> 
    <!-- //banner-text -->   
  </div>
  <!-- //banner -->

  <!-- about -->
  <div id="about" class="about">
    <div class="container">
      <div class="col-md-6 agileits_about_grid_left">
        
      </div> 
      <img src="Cars/audi.jpg" height="150" width="380" alt=" " class="img-responsive about-w3img" />
      <div class="col-md-6 agileits_about_grid_right">
        <h3 class="agileits-title">about <span class="w3lshr-line"> </span></h3>
        <h4>Booking facility is made available for the customers.</h4>
        <p> Travera is India's largest retail focused Intercity cab rental player. We have been serving customers for the last 10 years. We have a proven business and service model of providing quality chauffeur driven car rental services in 60 cities across India. We are venture funded by leading investors - Xavier's Engineering college.</p>
      </div>
      <div class="clearfix"> </div>
    </div> 
  </div>
  <div class="w3ls_about_bottom">
    <div class="container"> 
      <div class="w3_about_bottom_grid"> 
        <h4><span>Recommended</span> Car</h4>
        <a href="#myModal" class="wthree-btn btn-6"  data-toggle="modal">Read More<span></span></a> 
      </div>
    </div>
  </div>
  <!-- //about --> 

  <!-- services -->
  <div class="services jarallax">
    <div class="container"> 
      <div class="w3ls_banner_bottom_grids">
        <ul class="cbp-ig-grid">
          <li>
            <div class="w3_grid_effect">
              <span class="cbp-ig-icon w3_road"></span>
              <h4 class="cbp-ig-title">Validation</h4>
              <span class="cbp-ig-category">Traversa</span>
            </div>
          </li>
          <li>
            <div class="w3_grid_effect">
              <span class="cbp-ig-icon w3_cube"></span>
              <h4 class="cbp-ig-title">Security</h4>
              <span class="cbp-ig-category">Traversa</span>
            </div>
          </li>
          <li>
            <div class="w3_grid_effect">
              <span class="cbp-ig-icon w3_users"></span>
              <h4 class="cbp-ig-title">Complain</h4>
              <span class="cbp-ig-category">Traversa</span>
            </div>
          </li>
          <li>
            <div class="w3_grid_effect">
              <span class="cbp-ig-icon w3_ticket"></span>
              <h4 class="cbp-ig-title">Session</h4>
              <span class="cbp-ig-category">Traversa</span>
            </div>
          </li>
        </ul>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- //services -->
  
  <!-- gallery -->
  <div id="gallery" class="gallery">
    <div class="container">
      <h3 class="agileits-title">Gallery<span class="w3lshr-line"> </span></h3>
      <div class="main">
          <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/11.jpg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/13.jpg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>DRIVE IN. STAND OUT</h4>
                <p>Meet the sporty crossfade monoform design, bold super slick front grille, side character lines, dynamic alloy wheels and rear LED wing light.</p>
              </div>
            </a>
          </div>
                </div>
        <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/11.jpg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/11.jpg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>A LEGACY</h4>
                <p>The classic Honda City contour is unmistakable but the surprises will thrill you too. It is a design vision that echoes the City’s blue blooded sedan charm.</p>
              </div>
            </a>
          </div>
                </div>
        <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/14.jpg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/14.jpg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>SWIFT</h4>
                <p>EXITEMENT,LIKE NEVER BEFORE Get ready to experience a new level of excitement.Get ready,for The Swift.</p>
              </div>
            </a>
          </div> 
                </div>  
        <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/15.jpg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/15.jpg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>CREATED TO INSPIRE LUXURY AND ELEGANCE</h4>
                <p>A car that provides an astonishing performance.</p>
              </div>
            </a>
          </div>
                </div>
        <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/17.jpeg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/17.jpeg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>EXPERIENCE THE PREMIUM</h4>
                <p>A true blend of technology and creativity that delineates true perfection with every ride.</p>
              </div>
            </a>
          </div>
                </div>
        <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/18.jpg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/18.jpg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>XCENT</h4>
                <p>THE STYLISH FAMILY SEDANThe All New XCENT makes a bold statement on the road while taking comfort and safety to a 
                whole new level. An Ideal stylish sedan for your family.</p>
              </div>
            </a>
          </div> 
                </div>  
        <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/19.jpg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/19.jpg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>AUDI</h4>
                <p>Audi A8 grants you the freedom to concentrate on the essentials. </p>
              </div>
            </a>
          </div>
                </div>
        <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/1.jpeg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/8.jpg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>BMW 5 series</h4>
                <p>BMW 5 Series is the embodiment of the modern business sedan.</p>
              </div>
            </a>
          </div>
                </div>
        <div class="col-sm-4 col-xs-6 gallry-agile-grids">
          <div class="view view-seventh">
            <a href="gallery/2.jpeg" class="b-link-stripe b-animate-go thickbox" title="Car Trade">
              <img src="gallery/9.jpg" width="800" height="250" alt=""/>
              <div class="mask">
                <h4>Mercedes benz</h4>
                <p>The design of a Masterpiece.
                   This Masterpiece is sophisticated, confidently stylish and sporty. Its design displays hallmark Mercedes-Benz saloon proportions. </p>
              </div>
            </a>
          </div> 
        </div>
        <div class="clearfix"> </div>
            </div>
    </div>
  </div>
  <!-- //gallery -->

  
  <!-- Reviews -->
  <div id="review" class="blog gallery">
    <div class="container">
      <h3 class="agileits-title">Reviews<span class="w3lshr-line"> </span></h3>
    </div>
      <div class="services jarallax">  
      <div class="blogbg">    
        <center>
       <?php

        define('HOST','localhost:3306');
        define('USER','root');
        define('PASS','');
        define('DB','mis1');
        
        $conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

        //$sql = 'SELECT carcategory , carname , Hreview , review , Dat , Tim FROM reviews';
        $sql='SELECT t.carcategory, t.carname, t.Hreview, t.review, t.Dat, t.Tim FROM reviews AS t ORDER BY RAND() LIMIT 3';

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
  </center>
  </div>
  </div>    
  </div>
  <!-- //Reviews --> 

  <!-- contact -->
  <div id="contact" class="contact">
    <div class="services jarallax">
      <div class="w3_agileits_contact_grids">
        <div class="col-md-6 col-xs-8 w3_agileits_contact_grid_left">
          <div class="agile_map">
            <iframe src="" style="border:0"></iframe>
          </div>
          <div class="agileits_w3layouts_map_pos">
            <div class="agileits_w3layouts_map_pos1">
              <h3>Contact Info</h3>
              <p> XIE,Opposite S.L.Raheja Hospital, Mahim Causeway, Mahim (West), Mumbai, Maharashtra 400016</p>
              <ul class="wthree_contact_info_address">
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">traversacompany@example.com</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+(91) 998734562191</li>
              </ul>
              <div class="w3_agile_social_icons w3_agile_social_icons_contact">
                <ul>
                  <li><a href="https://www.facebook.com/profile.php?id=100007079898061" class="icon icon-cube agile_facebook"></a></li>
                  <li><a href="#" class="icon icon-cube agile_rss"></a></li>
                  <li><a href="#" class="icon icon-cube agile_t"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 w3_agileits_contact_grid_right">
          <h3 class="agileits-title">Contact<span class="w3lshr-line"> </span></h3>  
          <form action="#" method="post">
            <span class="input input--ichiro">
              <input class="input__field input__field--ichiro" type="text" id="input-25" name="Name" placeholder=" " required="" />
              <label class="input__label input__label--ichiro" for="input-25">
                <span class="input__label-content input__label-content--ichiro">Your Name</span>
              </label>
            </span>
            <span class="input input--ichiro">
              <input class="input__field input__field--ichiro" type="email" id="input-26" name="Email" placeholder=" " required="" />
              <label class="input__label input__label--ichiro" for="input-26">
                <span class="input__label-content input__label-content--ichiro">Your Email</span>
              </label>
            </span>
            <textarea name="Message" placeholder="Your message here..." required=""></textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- contact -->

   

  <!--modal-->
  <div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
        </div> 
        <div class="modal-body">
          <img src="gallery/8.jpg" alt=""> 
          <h5>BMW X5</h5>
          <p> Presenting BMW Financial Services – the most flexible and efficient.BMW has given the X5 a huge makeover, both interior and exterior, before launching it here.The X5 will come with two engine options - the petrol 4.4-litre V8 and the 3.0-litre straight six diesel. The petrol V8 churns out 442 bhp and is a treat to drive. Provide throttle and it leaps to your delight and though there are bits and pieces of aluminium and plastic used in the car, the X5 weighs in at a heavy 2175kg. Still the petrol engine is so powerful that it pulls this mammoth clean and with equal amount of ease. This is also thanks to the 8-speed automatic gearbox which shifts like a dream.</p>
        </div> 
      </div>
    </div>
  </div>
  <!-- //modal -->

  <?php
    include('footer.php');
  ?>

  
  
  

  <script type="text/javascript" src="firstpageassets/js/moment.js"></script>
  <script type="text/javascript" src="firstpageassets/js/moment-timezone-with-data.js"></script>
  <script type="text/javascript" src="firstpageassets/js/timer.js"></script>
  <!-- //timer scripts -->
  <!-- start-smooth-scrolling --> 
  <script type="text/javascript" src="firstpageassets/js/move-top.js"></script>
  <script type="text/javascript" src="firstpageassets/js/easing.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
      
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
  </script>
  <!-- //end-smooth-scrolling -->  
  <!-- smooth-scrolling-of-move-up -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
      var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
  <!-- //smooth-scrolling-of-move-up -->   
  <!-- Scrolling Nav JavaScript --> 
    <script src="firstpageassets/js/scrolling-nav.js"></script>  
  <!-- //fixed-scroll-nav-js -->  
  <!-- bth hover effect --> 
  <script>
  $(function() {
    $('.btn-6')
    .on('mouseenter', function(e) {
      var parentOffset = $(this).offset(),
      relX = e.pageX - parentOffset.left,
      relY = e.pageY - parentOffset.top;
      $(this).find('span').css({
      top: relY,
      left: relX
      })
    })
    .on('mouseout', function(e) {
      var parentOffset = $(this).offset(),
      relX = e.pageX - parentOffset.left,
      relY = e.pageY - parentOffset.top;
      $(this).find('.btn-6 span').css({
      top: relY,
      left: relX
      })
    }); 
  });
  </script> 
  <!-- //bth hover effect --> 

  <!-- jarallax -->
  <script src="firstpageassets/js/jarallax.js"></script>
  <script src="firstpageassets/js/SmoothScroll.min.js"></script>
  <script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
      speed: 0.5,
      imgWidth: 1366,
      imgHeight: 768
    })
  </script>
  <!-- //jarallax -->   

  <!-- FlexSlider --> 
  <script defer src="firstpageassets/js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider){
        $('body').removeClass('loading');
      }
      });
    });
  </script>
  <!-- //End-FlexSlider -->  
  <!-- pop-up-script -->
  <script src="firstpageassets/js/jquery.chocolat.js"></script>
  <script type="text/javascript">
  $(function() {
    $('.view-seventh a').Chocolat();
  });
  </script>
  <!-- //pop-up-script -->  
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="firstpageassets/js/bootstrap.js"></script> 
</body>
</html>