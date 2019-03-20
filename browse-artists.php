<?php

include 'includes/art-config.inc.php';

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
   
<?php include 'includes/art-header.inc.php'; 

echo "<table class='table table-dark'>";
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
</tr>";
echo "</thead>";
echo "<tbody>";
class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td scope='row'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "web-user";
$password = "1234";
$dbname = "art";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  
  $stmt = $conn->prepare("SELECT ArtistID, FirstName, LastName, Nationality, Gender, YearofBirth, YearofDeath, Details, ArtistLink FROM Artists"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</tbody>";
echo "</table>";
?>

  
  ?>
    
  <footer class="ui black inverted segment">
      <div class="ui container">footer for later</div>
  </footer>
</body>
</html>