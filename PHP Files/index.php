
<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html <?php if($page['id']==6){ echo 'ng-app="Exercises"'; } ?>>
    <head>
    
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="images/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php include('config/css.php'); ?><!-- CSS Files-->
        <?php include('config/js.php'); ?><!-- JavaScript Files-->
       
        <title><?php echo $page['title'].' | '.$site_name; ?></title>
        
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  
    </head>
<body>
    <header id="landing">
			<nav class="nav nav-default nav-transparent" style="margin: 10px;"> <!--I changed the navbar to nav -->
			  <div class="container-fluid" style="margin: 10px;">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header" style="margin: 10px;">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
							<a href= "index.php"> <i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i> </a><br/>
			      <a class="navbar-brand" href="#" style="color:#FFFFFF; font-weight:bold"><span class="brand-underline">FIT</span> TIME</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
			        <li><a href="#aboutus" style="color:#FFFFFF; font-weight:bold; text-decoration: none; hover:#000000;">ABOUT US</a></li>
			        <li><a href="meal.php" style="color:#FFFFFF; font-weight:bold">RESTAURANTS</a></li>
			        <li><a href="gym.php" style="color:#FFFFFF; font-weight:bold">GYM</a></li>
			        <li><a href="#contactus" style="color:#FFFFFF; font-weight:bold">CONTACT US</a></li>
			        <li><a href="login.php" style="color:#FFFFFF; font-weight:bold">LOGIN/SIGN UP</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

			<div class="container">
				<div class="landing-caption">
					<h1><span class="caption-slash">Get Fit in the GYM/</span></h1>
					<p class="caption-paragraph"> Lose weight in the kitchen<span class="caption-paragraph-slash">/</span></p>
				</div>
			</div>
		</header><!-- End of landing -->
		<div class="angled-overlay"></div>
		<!-- End of Overlay -->
		<section id="feature1">
			<div class="container ">
				<div class="row feature1-part-one">
					<div class="col-lg-4" data-wow-duration="0s">
						<!-- <i class="ion-ios-briefcase-outline"></i> --> <br/><br/>
						<h2 class="brief-heading-one">UF RESTAURANTS</h2><br/>
						<p class="features-brief">Meals are an important part of our fitness routine. The meals we suggest are based on the ones available on Campus. We try to fit these meals into your calorie goals.</p>
						<p>
							<a href="meal.php" class="explain-more">
							Explore more <i class="ion-ios-arrow-thin-right"></i>
							</a>
						</p>
					</div>
					<div class="col-lg-5" data-wow-duration="0s">
						<!-- <i class="ion-ios-speedometer-outline"></i> --><br/><br/>
						<h2 class="brief-heading-one">UF GYM</h2><br/>
						<p class="features-brief">A healthy body is achievable only with the proper exercising schedule. Maintain a regular exercise schedule to attain the body you always wanted. We can help you locate the gym facilities available to you on campus.</p>
						<p>
							<a href="gym.php" class="explain-more">
							Search Gym <i class="ion-ios-arrow-thin-right"></i>
							</a>
						</p>
					</div>
					<div class="col-lg-3" data-wow-duration="0s">
						<!-- <i class="ion-ios-cloud-outline"></i> --><br/><br/>
						<h2 class="brief-heading-one">PROGRESS</h2><br/>
						<p class="features-brief">Want to stay updated with how you have been performing? Want to see your progress daily? We are here to help. You can view your daily progress here and we can help you to stay motivated.</p>
						<p>
							<a href="login.php" class="explain-more">
							See Progress <i class="ion-ios-arrow-thin-right"></i>
							</a>
						</p>
					</br>
					</div>
					
				</div>
                 <a name="aboutus"> </a>
				<div class="row feature1-part-two">
					<div class="col-lg-4 content-1-third">
						<h5>Fit Time</h5>
						<h2>ABOUT US </h2>
						<br/>
						<p>We believe that the best way to lose weight and keep it off is to simply keep track of the foods you eat. Gimmicky machines and fad diets don't work, so we designed a free website that make calorie counting and food tracking easy. </p>
						
					</div>
					<div class="col-lg-8 content-2-third-woman wow slideInRight" data-wow-duration="0s">

					</div>
				</div>
				<div class="row feature1-part-two">
					<div class="col-lg-4 col-lg-push-8 content-1-third">
						<h5>It's all about</h5>
						<h2>Fitness</h2>
						
						<p>FIT TIME helps you create a personalized profile and keep track of your regular meals and calories. Not only that, it suggests you meals to eat on campus which fit into your calorie goals for the day. </p>
                        <br/>
                        Join FIT TIME to get the perfectly fit and healthy body you always wanted! 
						
					</div>
					<div class="col-lg-8 col-lg-pull-4 content-2-third-love-body wow slideInLeft" data-wow-duration="0s">

					</div>

				</div>
			</div><!-- End of container-->
		</section><!-- End of feature1-->
		<section id="feature2">
			<div class="container">
				<div class="row feature1-part-two">
					<div id="col-lg-4"class="col-lg-4">
						<div class=" content-1-third-jog wow fadeInDown" data-wow-duration="0s">

						</div>
						<div class="content-1-third-track">
							<h5>Track Your</h5>
							<h2 >Lifestyle</h2>
							<i class="ion-ios-person"></i>
							<p>We analyze you current health based on your BMI. Using the BMI, we suggest you your daily calorie needs. We tell you about your current body status and help you improve it.</p>
						</div>
					</div><!-- end of col-lg-4 -->
					<div id="col-lg-8"class="col-lg-8">
						<div class="content-2-third-beach wow fadeInUp" data-wow-duration="0s">

						</div>
						<div class="content-2-third-summer">
							<h2 >How this works?</h2>
							<p>You start by signing up and entering information about your weight and height. Based on this information, we calculate your BMI, BMR and your set calorie goal. You can now enter the calories you burned through the day doing any physical ativities. These details will help you achieve your daily fitness goals.</p>
						</div>
					</div>
				</div><!-- End of col-lg-4 before col-lg-8-->
				
			</div><!-- End of container-->
		</section><!-- End of feature2-->
        <section>
        <div class="row feature1-part-two">
					<div align="center">
						<br/>
                        <br/>
						
							<img src="assets/images/fitime-creators.jpg"/>
					<br/>
                        <br/>
					
				</div>
                </div>
                </section>
		<footer>
			<div class="launch-ideas">
				<div class="launch-caption">
               
					<h2>Research says "It takes only 21 days"</h2>
					<p> 21 days of healthy eating and working out and it will become a HABIT</p>
				</div>
			</div>
			<div class="bg-angled-left"></div>
			<div class="bg-angled-right"></div>
			<div class="container footer-details">
				<div class="red-angle"></div>
				<div class="row">
					
					<div class="footer-form col-lg-8 col-lg-offset-4">
                     <a name="contactus"> </a>
						<h3 style="font-size:25px">Contact Us</h3>
						<p> Have a question regarding our website or any feedback, </p>
                        <p>feel free to drop a message !</p>
					</div>
					
				</div>
				<div class="row">
					<div class="footer-form col-lg-8 col-lg-offset-4">
						<form class="form-inline">
						  <div class="form-group">
						    <input type="text" class="form-control" id="exampleInputName2" placeholder="Your Name">
						  </div>
						  <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Your Message">
						  </div>
						  <button type="submit" class="btn btn-join">Send Email</i></button>
						</form><!--  end of form -->
					</div>
				</div>
                
			</div>
            
            <?php include('templates/footer.php'); ?>

		</footer>
	
    
<script src="assets/js/wow.js"></script>
		<script src="assets/js/app.js"></script>
</body>
</html>