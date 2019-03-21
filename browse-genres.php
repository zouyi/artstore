<?php

include 'includes/art-config.inc.php';
try {
	
    $genreDB = new GenreDB($pdo);
    $genres = $genreDB->getAll();  

	
} catch (PDOException $e) {
	
   die( $e->getMessage() );
	
}

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
  
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>
  <style>

  </style>
<body>
   <div class="container">
<?php include 'includes/art-header.inc.php'; 

//echo "<img src='images/banner1.jpg'/>";
echo "<table class='table table-dark'>";
echo "<thead>";
echo "<tr><th>ID</th>
<th scope='col'>Name</th>
<th scope='col'>Era ID</th>
<th scope='col'>Description</th>
<th scope='col'>Genre Page</th>
<th scope='col'>Wiki Link</th>
</tr>";
echo "</thead>";
echo "<tbody>";
	

try {

//echo $artists;
while ($genre = $genres->fetch()){
	$gid = $genre['GenreID'];
			echo '<tr>';
			
			echo '<td>'.$genre['GenreID'].'</td>';
			echo '<td>'.$genre['GenreName'].'</td>';
			echo '<td>'.$genre['EraID'].'</td>';
			echo '<td>'.$genre['Description'].'</td>';
            echo '<td><a href="displaySingleGenre.php?gid='.$gid.'">Genre Page</a></td>';
            echo '<td><a href="'.$genre['Link'].'">'.$genre['Link'].'</a></td>';

	echo '</tr>';
			
}
			


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
echo "</tbody>";
echo "</table>";
?>

  
  ?>
    </div>
  <footer class="ui black inverted segment">
       <?php include 'includes/art-footer.inc.php';?>
  </footer>
</body>
</html>