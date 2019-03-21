<?php

include 'includes/art-config.inc.php';
try {
	
    $galleryDB = new GalleryDB($pdo);
    $galleries = $galleryDB->getAll();  

	
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
    .table{
      width: 50%;
      margin-left:50px;
    }
  
  </style>
<body>
   <div class="container">
    
<?php include 'includes/art-header.inc.php'; 
     echo "<h2>Browse Galleries</h2>";
//echo "<img src='images/banner1.jpg'/>";
echo "<table class='table table-dark'>";
echo "<thead>";
echo "<tr><th>ID</th>
<th scope='col'>Name</th>
<th scope='col'>Native Name</th>
<th scope='col'>City</th>
<th scope='col'>Country</th>
<th scope='col'>Latitude</th>
<th scope='col'>Longitude</th>
<th scope='col'>Gallery Page</th>
<th scope='col'>Web Site</th>
</tr>";
echo "</thead>";
echo "<tbody>";
	

try {

//echo $artists;
while ($gallery = $galleries->fetch()){
		$galid = $gallery['GalleryID'];
			echo '<tr>';
			
			//echo '<td>'.$gallery['GalleryID'].'</td>';
			echo '<td>'.$gallery['GalleryName'].'</td>';
			echo '<td>'.$gallery['GalleryNativeName'].'</td>';
			echo '<td>'.$gallery['GalleryCity'].'</td>';
			echo '<td>'.$gallery['GalleryCountry'].'</td>';
			echo '<td>'.$gallery['Latitude'].'</td>';
			echo '<td>'.$gallery['Longitude'].'</td>';
//			echo '<td>'.$artist['GalleryWebSite'].'</td>';
            echo '<td><a href="displaySingleGallery.php?galid='.$galid.'">Gallery Page</a></td>';
			echo '<td><a href="'.$gallery['GalleryWebSite'].'">'.$gallery['GalleryWebSite'].'</a></td>';
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