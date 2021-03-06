<?php

include 'includes/art-config.inc.php';
try {
	
    $subjectDB = new SubjectDB($pdo);
	$paintDB = new PaintingDB($pdo);
	
		if (isset($_GET['subid']) && ! empty($_GET['subid'])) {
				
				$subid = $_GET['subid'];
				
				//echo $aid;
        $subject= $subjectDB->findById($subid);
        $paintings = $paintDB->findbySubject($subid);
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

	
			$subid = $subject['SubjectID'];
		
			echo '<tr>';
			echo '<td>'.$subid.'</td>';
			echo '<td>'.$subject['SubjectName'].'</td>';
			echo '</tr>';
			
		
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
echo "</tbody>";
echo "</table>";
?>

		     <?php include 'includes/related-images2.inc.php'; ?>      

  
  ?>
    
		 	</div>

  <footer class="ui black inverted segment">
     <?php include 'includes/art-footer.inc.php';?>
  </footer>
</body>
</html>