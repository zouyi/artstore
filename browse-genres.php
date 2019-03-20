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
      margin-left:20%;
    }
  
  </style>
<body>
    
<?php include 'includes/art-header.inc.php'; 

$mysqli = NEW mysqli('localhost','username','password','database');

require('/home/database/public_html/wp-load.php');
$id = get_the_ID();

$resultSet = $mysqli->query("SELECT * FROM sweepstake_data WHERE item_id = $id");

if($resultSet->num_rows !=0){

echo "<table>"; // start a table tag in the HTML

    while($rows = $resultSet->fetch_assoc())
    {
        $description = $rows['description'];
        $links = $rows['links'];
        $category = $rows['category'];
        $eligibility = $rows['eligibility'];
        $start_date = $rows['start_date'];
        $end_date = $rows['end_date'];
        $entry_frequency = $rows['entry_frequency'];
        $prizes = $rows['prizes'];
        $victory_prizes = $rows['victory_prizes'];
        $additional_comments = $rows['additional_comments'];

        "<tr><td>" . echo $description != "" ? "<p>Name: $description<br />" : "" ;
        "<tr><td>" . echo $links != "" ? "Link: <a href=$links>Click here</a> <br />" : "" ;
        "<tr><td>" . echo $category != "" ? "Category: $category<br />" : "" ;
        "<tr><td>" . echo $eligibility != "" ? "Eligibility: $eligibility<br />" : "" ;
        "<tr><td>" . echo $start_date != "" ? "Start date:$start_date<br />" : "" ;
        "<tr><td>" . echo $end_date != "" ? "End date: $end_date<br />" : "" ;
        "<tr><td>" . echo $entry_frequency != "" ? "Entry frequency: $entry_frequency<br />" : "" ;
        "<tr><td>" . echo $prizes != "" ? "Prizes: $prizes<br />" : "" ;
        "<tr><td>" . echo $victory_prizes != "" ? "Victory prizes: $victory_prizes<br />" : "" ;
        "<tr><td>" . echo $additional_comments != "" ? "Additional comments: $additional_comments<br />" : "" ;

    }

echo "</table>"; //Close the table in HTML

}else {
    echo "No results.";
}

  ?>
    
  <footer class="ui black inverted segment">
      <div class="ui container">footer for later</div>
  </footer>
</body>
</html>