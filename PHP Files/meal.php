
<?php include('config/setup.php'); ?>
<html >
    <head>
    
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="images/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Sticky Footer CSS -->
<link rel="stylesheet" href="sticky_footer.css" />
<!-- Blog Navigation Bar CSS -->
<link rel="stylesheet" href="blog.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
<!-- Google Fonts: Noto Sans -->
<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />
<!-- jQuery UI CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<style>

    body{
        background-color:#000000;
    }
    #logo{
        background-color:purple;
        border-radius:90%;
        height:70px;
        width:400px;
        margin:auto;
        margin-bottom:20px;
    }
    #logo h1{
        padding-top:15px;
        color:white;
    }
    #my{
        color:#4cff00;
    }
    #logo a:hover{
        text-decoration:none;
    }
    #cal td img{
        height:50px;
        width:80px;
        border-radius:5px;
        margin-right:15px;
    }
    .footer{
        background-color:#F5CC66;
        margin-bottom:0;
    }
    .footer div{
        padding-top:15px;
        padding-bottom:10px;
    }
</style><!-- CSS Files-->
        <!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            var myhtml = $.ajax({
                type:"POST",  //傳值方式有分 post & get
                url:"action.php",
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
       
        <title>Home | FITTIME</title>
        
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!--<script src="assets/js/jquery-3.1.1.min.js"></script>-->
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
							<a href="index.php"><i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i>
			      </br><a class="navbar-brand" href="index.php" style="color:#FFFFFF; font-weight:bold"><span class="brand-underline">FIT</span> TIME</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
			        
			        <li><a href="meal.php" style="color:#F26351; font-weight:bold">RESTAURANTS</a></li>
			        <li><a href="gym.php" style="color:#FFFFFF; font-weight:bold">GYM</a></li>
			        <li><a href="index.php#contactus" style="color:#FFFFFF; font-weight:bold">CONTACT US</a></li>
			        <li><a href="login.php" style="color:#FFFFFF; font-weight:bold">LOGIN/ SIGN UP</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

			
		

<div align="centre">
<section id="feature1">
<div class="container" style="background-color:#ffffff;">
<br/>
 <h1 align="center" style="color:#F26351"> UF RESTAURANTS </h1>
        <hr/>
<br/>
   <div class="col-md-4 col-md-offset-4">
<div class="form-group">
<label class="form-inline" style="color:#F26351"><h3 style="color:#F26351" >PRICE LESS THAN (In Dollars):*</h3></label>
<input id="price" style:"color:#000000;" class="form-control"type="text" name="price" required>

<label class="form-inline" style="color:#F26351">CALORIES LESS THAN:*</label>
<input id="calories" style:"color:#000000" class="form-control" type="text" name="calories" required>

<label class="form-inline" style="color:#F26351">RESTAURANT:*</label>
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
<button  id="submit" class="btn btn-primary" style="background-color: #F26351;color: #FFFFFF;">Submit</button><br><br><br>
</div>
</div>
</div>
</section>
<section id="feature2">
<div class="container" style="background-color:#ffffff;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="textfield"name="textfield" style="color:#F26351 ; font:bold;" align="center">


</div>





<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
		</div>
            </section>
            <footer class="footer" style="background-color:#F26351;">
    <div class="container" style="background-color:#F26351;">
    <p class="text-center"><em>FITTIME</em> | <strong> HCI PROJECT 2017 </strong> | By GROUP 15<p>
    </div>
</footer>
		

  
    
<script src="assets/js/wow.js"></script>
		<script src="assets/js/app.js"></script>
</body>
</html>


<?php

?>