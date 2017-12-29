<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Foodee &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
        <link rel="stylesheet" href="css/form-basic.css" type="text/css" media="screen" />
        
         <script>
                function theFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
        
	</head>
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">                   
			<div class="flexslider">                         
				<div class="fh5co-overlay"><div >
                                        <form class="form-basic2" style="float: right;" name="adminlogin">
                                                <div class="form-row"> 
                                                <button type="button" onclick="theFunction()">Admin Login</button>
                                            </div>
                                            </form>
                                            </div></div>
                                
				<div class="fh5co-text">
					<div class="container">
                                            
						<div class="row">
							<h2>Berea College</h2>
							<h1 class="to-animate">Food Service</h1>
                                                        
                                                        <form class="form-basic" method="post" action="admin_login.php" name="accessform" id="myDIV" >

            <div class="form-title-row">
                <h3>Administrator Login</h3>
            </div>

            <div class="form-row">
                <label>
                    <span>Password</span>
                    <input id="pwrd" type="password" name="passcode" required autofocus  placeholder="**********" ></input>
                </label>
            </div>


            <div class="form-row">
                <button id="submit" type="submit" onclick="myFunction()">Enter</button>
            </div>
            
            <div class="form-row">
                <button type="reset">Clear</button>
            </div>

        </form>
						</div>
                                            
					</div>
                                    
				</div>
                                
			  	<ul class="slides">
			   	<li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.1"></li>
			   	<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.1"></li>
			   	<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.1"></li>
			  	</ul>
                                
                                

			</div>
			
		</div>


		<div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
                                            <h2 class="heading to-animate"><?php echo 'Food Menu For ' . date("l") . ' ' . date("m/d/Y"); ?></h2>
						<p class="sub-heading to-animate"> <?php date_default_timezone_set("America/New_York"); echo 'This is the current menu available at dining as at ' . date("h:i:sa"); ?></p>
					</div>
				</div>
				<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Fire & Ice</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Stir Fry</h3>
											<p>Sizzling stir fried rice with choice of protein.</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										Calorie Amount
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Vegeterian</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_3.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Caesar Salad</h3>
											<p>Served with an European touch.</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										Calorie Amount
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Classics</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Pineapple Juice</h3>
											<p>Made with tropical Hawaiian pineapples.</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										Calorie Amount
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Grill</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_3.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Beef Steak</h3>
											<p>Saucy long-grilled beef steak.</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										Calorie Amount
									</div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>		
	</div>
	
           
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>