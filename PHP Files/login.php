<?php
//Database connection:
    include('config/db_connection.php');

    //Start session:
    session_start();

    if($_POST){
        $query="SELECT * FROM users WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
        $result=mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email']=$_POST['email'];
            header('Location: dashboard.php');
        }
        else{
            echo "<script>alert('The email or password you entered are incorrect! Try again.');</script>";
        }
    }
?>
<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image" href="images/icon.png" />
    <title>Login | <?php echo $site_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <?php include('config/js.php'); ?><!-- JavaScript Files-->
    
    
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
						<a href="index.php">	<i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i> </a><br/>
			      <a class="navbar-brand" href="index.php" style="color:#FFFFFF; font-weight:bold"><span class="brand-underline">FIT</span> TIME</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
			        <li><a href="index.php" style="color:#FFFFFF; font-weight:bold">ABOUT US</a></li>
			        <li><a href="meal.php" style="color:#FFFFFF; font-weight:bold">RESTAURANT</a></li>
			        <li><a href="gym.php" style="color:#FFFFFF; font-weight:bold">GYM</a></li>
			        <li><a href="index.php#contactus" style="color:#FFFFFF; font-weight:bold">CONTACT US</a></li>
			         <li><a href="login.php" style="color:#F26351; font-weight:bold">LOGIN/SIGN UP</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

    
        
        <section id="feature1">
    <div class="container" style="background-color:#ffffff;>
        <div class="col-md-8 col-md-offset-2">
        <br/>
        <br/> 
        <br/>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingOne" style="background-color:#A2CA28;">
                        <h4 class="panel-title"> 

                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="text-center">Log In</h2>
                            </a>
                        </h4>
                    </div><!-- END panel-heading -->
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <!-- START Username-->
                                            <label for="email">Username</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Username" />
                                        </div><!-- END Username -->
                                        <div class="form-group">
                                            <!-- START Password -->
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                        </div><!-- END Password -->
                                        <!-- <div class="checkbox">
                                           <label>
                                            <input type="checkbox"> Keep me logged in
                                          </label>
                                        </div> -->
                                        <button type="submit" class="btn btn-default" style="background-color: #F26351; color: #FFFFFF;">Log In</button>
                                    </form><!-- END Login Form -->
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END panel-body -->
                    </div><!-- END panel-collapse -->
                </div><!-- END panel -->
                <br/>
                <br/>
                <br/>
                <br/>
<br/>
    
                <div class="panel" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingTwo" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="text-center">SIGN UP</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <form action="signup.php" method="post">
                                        <div class="form-group">
                                            <!-- START First Name -->
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required />
                                        </div><!-- END First Name -->
                                        <div class="form-group">
                                            <!-- START Last Name -->
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required />
                                        </div><!-- END Last Name-->
                                        <div class="form-group">
                                           
                                        <div class="form-group">
                                            <!-- START Username -->
                                            <label for="email">Username</label><i tabindex="0" data-toggle="popover" data-trigger="focus" title="Note" data-content="This cannot be changed later. It is just the name you will use to login; it will not be displayed." class="fa fa-exclamation-circle" style="position:relative;margin-left:2px;"></i>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Username" required />
                                        </div><!-- END Username -->
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                                        </div>
                                        <div class="form-group">
                                         <!-- START Gender-->
                                            <label for="gender">Gender</label>
                                            <select name="gender" class="form-control" required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                          </div><!-- END Gender -->
                                            <!-- START Age -->
                                            <label for="age">Age</label>
                                            <div>
                                            
                                            <input type="date" class="form-control" id="day" name="day" required />
                                            
                                            
                                            </div>
                                        </div><!-- END Age -->
                                       <div class="form-group">
                                            <label for="weight">Dietary Preference </label>
                                            <input type="text" class="form-control" id="dietary_pref" name="dietary_pref" placeholder="For eg. Vegetarian" required />
                                        </div><!-- END Weight -->
                                       
                                        <div class="form_group">
                                            <!-- START Level of Activity -->
                                            <label for="activity">Level of Activity</label>
                                            <select class="form-control" name="activity" required>
                                                <option value="little">Sedentary - little/no exercise</option>
                                                <option value="light">Lightly active - exercise 1-2 days/week</option>
                                                <option value="moderate">Moderately active - exercise 3-5 days/week</option>
                                                <option value="very">Very active - exercise 6-7 days/week</option>
                                                <option value="extra">Extra active - very hard exercise daily and physical job</option>
                                            </select>
                                        </div><!-- END Level of Activity -->
                                        <br />
                                        <button type="submit" class="btn btn-primary" style="background-color: #F26351; color: #FFFFFF;">Submit</button>
                                    </form><!-- END Create Account Form-->
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
            </div><!-- END panel-group -->
        </div><!-- End ROW -->
        </div>
        </div>
        <br/>
        <br/>
      </section>
      <section id="feature2">      
               
               <br/>
               <br/> 
      </section>
 
    
       
     <footer>
    <?php include('templates/footer.php'); ?>
  </footer>
  
</body>
</html>