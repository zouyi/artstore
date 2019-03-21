<?php


?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="css/semantic.js"></script>
        <script src="js/misc.js"></script>
    
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body >
    
<?php include 'includes/art-header.inc.php'; ?>
    <div class="container">

 <div class="row">
        <div class="col-md-12">
            <legend>Account Settings</legend>
        </div>
    </div>
	<div class="row">
	    <div class="col-md-3">
	        <h5>Settings</h5>
	    </div>
	    <div class="col-md-9">
	        <div class="checkbox">
                <label><input type="checkbox" value=""> Push notifications</label>
            </div>
            
            <div class="checkbox">
                <label><input type="checkbox" value="">Email verification</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="">Security Questions </label>
            </div>
	    </div>
	</div>
	 <div class="row">
	    <div class="col-md-3">
	        <h5> Block List</h5>
	    </div>
	    <div class="col-md-9">
	        <ul class="list-inline">
	            <li><input id="fname" name="First Name" class="form-control input-sm" placeholder="*" type="text"></li>
	            <li>List of terms not allowed in usernames, separated by commas</li>
	        </ul>
	    </div>
	</div>

	
	<div class="row">
	    <div class="col-md-3">
	        
	    </div>
	    <div class="col-md-9">
	        <button type="button" class="btn btn-primary">Save Changes</button>
	    </div>
	</div>
  </div>


    

      




    
  <footer class="ui black inverted segment">
        <?php include 'includes/art-footer.inc.php';?>
  </footer>
</body>
</html>