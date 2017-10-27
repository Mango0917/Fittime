
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
<body background="assets/images/background1.jpg">
    
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
							<a href="index.php"><i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i> </a>
			     </br> <a class="navbar-brand" href="index.php" style="color:#FFFFFF; font-weight:bold"><span class="brand-underline">FIT</span> TIME</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
			        <li><a href="dashboard.php" style="color:#FFFFFF; font-weight:bold">DASHBOARD</a></li>
						  <li><a href="meallog.php" style="color:#FFFFFF; font-weight:bold">RESTAURANTS</a></li>
			        <li><a href="gym.php" style="color:#F26351; font-weight:bold">GYM</a></li>
			        <li><a href="index.php#contactus" style="color:#FFFFFF; font-weight:bold">CONTACT US</a></li>
			        <li><a href="logout.php" style="color:#FFFFFF; font-weight:bold">LOGOUT</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

			
		
		
		
	<section id="feature1">
  <div class="container" style="background-color:#ffffff;">
<br/>
<h1 align="center" style="color:#F26351"> UF GYM LOCATIONS </h1>
        <hr/>     
    
    <div style=" color: #C2CA29; font-size:20px; margin-left:60px; font-weight:bold" >
<div class="col-md-4 col-md-offset-2">
				
               <img src="assets/images/gym-location.jpg" width="600" height="500"/>
		</div>
		</DIV>
		</div>
		</section>
	<section id="feature2">
  <div class="container" style="background-color:#ffffff;">
<br/>
<h1 align="center" style="color:#F26351"> MAP FOR GYM LOCATIONS </h1>
       </BR>   
    
    <div style=" color: #C2CA29; font-size:20px;margin-left:90px;  font-weight:bold" >
<div class="col-md-4 col-md-offset-2">
				
               <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1snAvGh4Q_EmUF8lSMgGpxbLlVSQ" width="500" height="500"></iframe>
							 <br>
</div>
<br>
<br>
</div>
					</BR>	
					</br>
	<br/>
		</div>
	
		</div>
		</section>
	


		<footer>
            
            <?php include('templates/footer.php'); ?>
</footer>
		
		
 

</body>
</html>