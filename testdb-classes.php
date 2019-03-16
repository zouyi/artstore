<?php

include 'includes/art-config.inc.php';

?>

<html>
<body>

<?php

try {

/*    $pdo = DatabaseHelper::setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
    echo "<p>Connection successful</p>";

    $sql = "select * from paintings where PaintingID=?";
    $result = DatabaseHelper::runQuery($pdo, $sql, array(14)); 
       while ($row = $result->fetch()) {   
      echo $row['PaintingID'] . " - " . $row['Title'] . "<br/>";   
    }
   */   
    
    $db = new ShapeDB($pdo);
    $result = $db->findById(2);
    echo '<h3>Sample Shape (id=2)</h3>';    
    echo $result['ShapeID'] . ' ' . $result['ShapeName'];    
    
    $result = $db->getAll();
    echo '<h3>All Shapes</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['ShapeID'] . ' ' . $row['ShapeName'];      
    }   
    
    $db = new GalleryDB($pdo);
    $result = $db->findById(7);
    echo '<h3>Sample Gallery (id=7)</h3>';    
    echo $result['GalleryID'] . ' ' . $result['GalleryName'];    
    
    $result = $db->getAll();
    echo '<h3>All Galleries</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['GalleryName'] . ' ' . $row['GalleryCity'];      
    }   
    
    
    $db = new GenreDB($pdo);
    $result = $db->findById(35);
    echo '<h3>Sample Genre (id=35)</h3>';    
    echo $result['GenreName'] . ' ' . $result['Description'];    
    
    $result = $db->getAll();
    echo '<h3>All Genres</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['GenreID'] . ' ' . $row['GenreName'];      
    }   
    
    $result = $db->findForPainting(483);   
    echo '<h3>findForPainting(483)</h3>';  
    while ($row = $result->fetch()) {   
      echo $row['GenreID'] . ' ' . $row['GenreName'];      
    }     
    
    
    
    $db = new SubjectDB($pdo);
    $result = $db->findById(6);
    echo '<h3>Sample Subject (id=6)</h3>';    
    echo $result['SubjectID'] . ' ' . $result['SubjectName'];    
    
    $result = $db->getAll();
    echo '<h3>All Subjects</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['SubjectID'] . ' ' . $row['SubjectName'];      
    }   
    
    $result = $db->findForPainting(483);   
    echo '<h3>findForPainting(483)</h3>';  
    while ($row = $result->fetch()) {   
      echo $row['SubjectID'] . ' ' . $row['SubjectName'];      
    }      
    
    $db = new ArtistDB($pdo);
    $result = $db->findById(2);
    echo '<h3>Sample Artist (id=2)</h3>';    
    echo $result['FirstName'] . ' ' . $result['LastName'];    
    
    $result = $db->getAll();
    echo '<h3>All Artists</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['FirstName'] . ' ' . $row['LastName'];      
    }
    
    
    $db = new PaintingDB($pdo);
    $result = $db->findById(14);
    echo '<h3>Sample Painting (id=14)</h3>';
    echo $result['Title'] . ' ' . $result['ImageFileName'];
    
    $result = $db->getAll();
    echo '<h3>All Paintings</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['Title'] . ' ' . $row['LastName'];      
    }    

  
    

    
    

  

}
catch (PDOException $e) {
   die( $e->getMessage() );
}

?>
</body>
</html>