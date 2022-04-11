<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

  ?>	
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Bus Pass System || Home Page</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="admin/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="admin/css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="admin/css/flexslider.css" type="text/css" media="screen" />  <!-- flexslider-CSS --> 
<link href="admin/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->  
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>  
	<!-- banner -->
	<div class="agileits-banner" style="background: url(images/bg.jpg) no-repeat center fixed; background: width 100%;">
		<div class="bnr-agileinfo"> 
			<!-- navigation -->
			<?php include_once('includes/header.php');?>
			<!-- banner-text --> 
			<div class="banner-text agileinfo" style="color:rgb(255 181 99); text-align:center; margin: auto; width:40rem; height:20%; background-color:rgba(0,0,0,0.2)"> 
				<h3>Lots of people want to ride with you in the limo, but what you want is someone who will take bus with you when the limo breks down</h3>
			</div>
			
		
		</div>
	</div>
	
	
	
		
	<!-- footer -->
	<?php include_once('includes/footer.php');?>   
	<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //js -->

	 
	
    <script src="js/bootstrap.js"></script>
</body>
</html>