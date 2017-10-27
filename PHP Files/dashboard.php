<?php
    //Start session
    session_start();

    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }
?>
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

	<!--script src="assets/js/jquery-3.1.1.min.js"></script-->
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
							<a href="index.php"><i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i> </a></br>
			      <a class="navbar-brand" href="index.php" style="color:#F26351; font-weight:bold"><span class="brand-underline">FIT</span> TIME</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
                  
			       
			        <li><a href="dashboard.php" style="color:#F26351; font-weight:bold">DASHBOARD</a></li>
              <li><a href="meallog.php" style="color:#FFFFFF; font-weight:bold">RESTAURANTS</a></li>
			        <li><a href="gymlog.php" style="color:#FFFFFF; font-weight:bold">GYM</a></li>
			        <li><a href="index.php#contactus" style="color:#FFFFFF; font-weight:bold">CONTACT US</a></li>
                    
			        <li><a href="logout.php" style="color:#FFFFFF; font-weight:bold">LOGOUT</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

			
		
		
       
		<section id="feature1">
       

       
			<div class="container" style="background-color:white; color:black;">
             
             <br/>
				<div class="container">
              
        <h1 align="center" style="color:#F26351"><?php include('templates/navigation.php');?> Dashboard  <a href="profile.php" style="color:#F26351; font-weight:bold" align="right"><img src="assets/images/profile.png" align="right" style="height:1.8em; width:3em;"/></a></h1>
        <hr/>
        
       <div>
       
         <label style="color:#F26351; font-size:2em;">SET GOAL</label>
         <br/><br/>
       <form class="form-inline" action="setgoal.php" method="post">
        <div class="form-group">
      
        <div>
            <input type="number" class="form-control" name="setgoal" id="setgoal" placeholder="calories/day" value="<?php echo $user['setgoal']; ?>" />

           
        </div>
         
    </div>
    
     <button type="submit" class="btn" style="background-color: #F26351; color: #FFFFFF; width:15.5em;">Set Goal</button>
   <div class="form-group" align="right">
  
						<h3 align="center" style="color:#000000; font-size:1em;">(Need help setting your goal?<a href="chart.php">&nbsp;Click here</a>)</h3><br/>
						
 <h1 align="center"style="font-size:1em; color:black;"><span style="font-size:10pt;"> </span>
</p>
</div>
  </br>  
</br>
<label> Set Goal:<label style="color:#F26351; font-size:2em;"> <?php echo $user['setgoal']; ?> </label> calories/day!</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
					
   </div>
    </form>
  
   
   <br/>
  <hr/>
          <label style="color:#F26351; font-size:2em;">TODAY'S PROGRESS</label>
        
        
						<h2>Calories Burned </h2>
						<br/>
						<p>  <?php include('index_pages/calories_burned.php'); ?> </p>
                        <br/>
						
   <form class="form-inline" >
        <div class="form-group">
   
        <div>
        </br>
        <label style="color:#000000; font-size:1.5em;"> Calories Consumed : </label>
            <input type="number" class="form-control" name="goal" id="consumed" placeholder="calories"/>

            <label style="color:#000000; font-size:1.5em;">&nbsp;-&nbsp;Calories Burned : </label>
            <input type="number" class="form-control" name="goal" id="burnt" placeholder="calories" value="<?php echo $calories_burned;?>"/>
     <button type="submit" class="btn" style="background-color: #F26351; color: #FFFFFF; width:15.5em;" onclick="calcProgress();return false;">Calculate Progress</button>
        </div>
        <br/>
         		<h3 align="left" style="color:#000000; font-size:1em;">(Ate on campus? Check the calories<a href="meallog.php">&nbsp;here</a>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(You can use the activity bar above or enter manually)</h3>
      
    </div>
    
     
    
 
    </form>
    <br/>
     <br/>
     <br/>
    <p id="progress" style="color:#F26351; font-size:2em;" align="center"></p>
 <script>
	function calcProgress(){
    var setgoal= document.getElementById("setgoal").value;
  var consumed = document.getElementById("consumed").value;
  var burnt = document.getElementById("burnt").value;
  var a=(setgoal-consumed);
  var goal = (a*1+burnt*1);
  document.getElementById("progress").innerHTML = "PROGRESS : "+ goal + " calories left for the day" ;
	}
  </script>
    </div>
    <hr/>		
      
			</div><!-- End of container-->
		</section><!-- End of feature1-->
        
		<section id="feature2">
			<div class="container" style="background-color:white; color:black;">
				<div class="row feature1-part-two">
					<div id="col-lg-4" class="col-lg-4">
						
						<div class="container" style="color:black;">
					
                      <div class="container">
                    
                   
					</div>
                   
				</div>		
      
			</div><!-- End of container-->
		</section><!-- End of feature1-->
        
		<section id="feature2">
			<script>
    $(document).ready(function(){
        $("#submit1").click(function(){
            var myhtml = $.ajax({
                type:"POST",  //傳值方式有分 post & get
                url:"action1.php",
                data:{ price:$('#price').val(),calories:$('#calories').val(),restuarant:$( "#sid option:selected" ).text()  },//將表單的值設定好
                async:false,
                success:function(dates){  
                //==alert(dates);  
                $("#textfield").val(dates);
            }
            }).responseText;
            $("#textfield").html(myhtml);
        });
              
})
</script><!-- JavaScript Files-->
            <div class="container" style="background-color:white; color:black;">
				<div class="row feature1-part-two">
					<div id="col-lg-4" class="col-lg-4">
						
						<div class="container" style="color:black;">
					
                      <div class="container">
                    
                    <div class="col-lg-5" data-wow-duration="0s">
						 <label style="color:#F26351; font-size:2em;" align="left">MEALS RECOMMENDATION</label>
						<br/><br/>
1. Subway Tuna Meal    Calories- 480 <br/>
2. Freshens Jamaican Smoothie Calories- 300 <br/>
3. Chicken Ceaser salad Calories- 744 <br/>
</div>
<div class="form-group col-lg-7">
<label class="form-inline" style="color:#F26351"><h3 style="color:#F26351" >PRICE LESS THAN:</h3></label>
<input id="price" style:"color:#000000;" class="form-control"type="text" name="price" required>

<label class="form-inline" style="color:#F26351">CALORIES LESS THAN:</label>
<input id="calories" style:"color:#000000" class="form-control" type="text" name="calories" required>

<label class="form-inline" style="color:#F26351">RESTAURANT:</label>
<select id="sid" style:"color:#000000;"  class="form-control" onChange="selectcity()" name="restuarant" required>
<option>--select--</option>
<option>Chick-fil-A</option>
<option>Einstein Bros Bagels</option>
<option>Freshens</option>
<option>Jamba Juice</option>
<option>Starbucks</option>
<option>Subway</option>
<option>Chomp It</option>
</select>
</div>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button  id="submit1" class="btn" style="background-color: #F26351; color: #FFFFFF; width:15.5em; align:center;">Submit</button><br><br><br>
</div>
</div>
</div>

<div class="container" style="background-color:#ffffff;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="textfield"name="textfield" style="color:#F26351 ; font:bold;" align="center">
</div>

</div>


						
				<br/>
                <br/>
               
					</div>
                   
				</div>
                    
                    
						<div class="col-lg-5" data-wow-duration="0s">
					<br/>
						
					</div>
                    
					<div data-wow-duration="0s">
					<br/>
        <br/>
				
					
                  
				</div><!-- End of col-lg-4 before col-lg-8-->
				
			</div><!-- End of container-->
		</section><!-- End of feature2-->
        </div>
        
		<footer>
			
            
            <?php include('templates/footer.php'); ?>

		</footer>
		
    
    <!-- <h1 class="text-center"><?php echo $page['title']; ?></h1>
    <div class="container">
        
  
    
<script src="assets/js/wow.js"></script>
		<script src="assets/js/app.js"></script>
</body>
</html>