<?php

include 'includes/art-config.inc.php';
try {
	
    $artistDB = new ArtistDB($pdo);
    $artists = $artistDB->getAll();  

	
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
echo "<h2>Browse Artists</h2>";
echo "<table class='table'>";
echo "<thead>";
echo "<tr><th>ID</th>
<th scope='col'>Firstname</th>
<th scope='col'>Lastname</th>
<th scope='col'>Nationality</th>
<th scope='col'>Gender</th>
<th scope='col'>Year of Birth</th>
<th scope='col'>Year of Death</th>
<th scope='col'>Details</th>
<th scope='col'>Link</th>
<th scope='col'>Artist Page</th>
<th scope='col'>Wiki Link</th>
</tr>";
echo "</thead>";
echo "<tbody>";
	

try {

//echo $artists;
while ($artist = $artists->fetch()){
	
			$aid = $artist['ArtistID'];
		
			echo '<tr>';
			echo '<td>'.$aid.'</td>';
			echo '<td>'.$artist['FirstName'].'</td>';
			echo '<td>'.$artist['LastName'].'</td>';
			echo '<td>'.$artist['Nationality'].'</td>';
			echo '<td>'.$artist['Gender'].'</td>';
			echo '<td>'.$artist['YearOfBirth'].'</td>';
			echo '<td>'.$artist['YearOfDeath'].'</td>';
			echo '<td>'.$artist['Details'].'</td>';
			echo '<td>'.$artist['ArtistLink'].'</td>';
			echo '<td><a href="displaySingleArtist.php?aid='.$aid.'">Artist Page</a></td>';
		echo '<td><a href="'.$artist['ArtistLink'].'">'.$artist['ArtistLink'].'</a></td>';
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
      <div class="ui container">footer for later</div>
  </footer>
</body>
</html>