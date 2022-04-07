<?php 
if(isset($_GET['car'])){  
  $car=$_GET['car'];
}
if(isset($_GET['page'])){  
  $page=$_GET['page'];
}
session_start();
unset($_SESSION['username']);
session_destroy();
//exit();
if(isset($_GET['car'])){?>
	<script type="text/javascript">
        window.location.href='select.php?car=<?php echo $car; ?>';
        //alert("Login Required");
    </script> 
    <?php 
}else if(isset($_GET['page'])){ ?>
    <script type="text/javascript">
        window.location.href='<?php echo $page; ?>';
        //alert("Login Required");
    </script> 
    <?php 
}else{
	header("Location:index.php");	
}
?>