<?php

include 'includes/art-config.inc.php';
try {
	
    $subjectDB = new SubjectDB($pdo);
	
	
		if (isset($_GET['sid']) && ! empty($_GET['sid'])) {
				
				$sid = $_GET['sid'];
				
				//echo $aid;
        $subject = $subjectDB->findById($sid);
   
    }
	
	
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

echo "<table class='table table-dark'>";
echo "<thead>";
echo "<tr><th>ID</th>
<th scope='col'>Name</th>
</tr>";
echo "</thead>";
echo "<tbody>";
	

try {

	
			$sid = $subject['subjectID'];
		
			echo '<tr>';
			echo '<td>'.$sid.'</td>';
			echo '<td>'.$subject['SubjectName'].'</td>';

//			echo '<td><a href="'.$gallery['GalleryWebSite'].'">'.$gallery['GalleryWebSite'].'</a></td>';
//		
			echo '</tr>';
			
		
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
echo "</tbody>";
echo "</table>";
?>

		     <?php include 'includes/related-images.inc.php'; ?>      

  
  ?>
    
		 	</div>

  <footer class="ui black inverted segment">
     <?php include 'includes/art-footer.inc.php';?>
  </footer>
</body>
</html>