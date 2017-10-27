<p class="lead">Please enter your activity and the duration.</p>
<form class="form-inline" action="dashboard.php" method="post">
    <div class="form-group">
        <label for="activity">Activity</label>
        <select class="form-control" name="activity">
            <?php include('calories_burned_options.php'); ?>
        </select>
    </div>
    <div class="form-group">
        <label for="duration">Duration</label>
        <div class="input-group">
            <input type="number" class="form-control" name="duration" id="duration" step="0.1" placeholder="Duration" autocomplete="no" />
            <div class="input-group-addon">hours</div>
        </div>
    </div>
    <button type="submit" class="btn"style="background-color: #F26351; color: #FFFFFF; width:15.5em;">Submit</button>
    <button type="reset" onclick="location.href = 'dashboard.php';" class="btn">Reset</button>
</form>
<?php
    if($_POST){
        if($_POST['activity']&& $_POST['duration']){
            $calories_burned=round($_POST['activity']*$_POST['duration']*55);
?>
               <!-- MAIN PAGE AREA-->
               </br>
               			<h3 align="center" style="color:#000000; font-size:1em;">Your calories burned are = <?php echo $calories_burned;?>.</h3>
        <?php }
    }
?>