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
<body >
    
<?php include 'includes/art-header.inc.php'; ?>
    
<main class="ui segment doubling stackable grid container">

    <section class="four wide column">
        <form class="ui form" method="get" action="browse-paintings.php">
          <h3 class="ui dividing header">Filters</h3>

          <div class="field">
            <label>Artist</label>
            <select class="ui fluid dropdown" name="artist">
                <option value='0'>Select Artist</option>  
                <?php  
                    outputOptions($artists, 'ArtistID', 'LastName');
                ?>
            </select>
          </div>  
          <div class="field">
            <label>Museum</label>
            <select class="ui fluid dropdown" name="museum">
                <option value='0'>Select Museum</option>  
                <?php  
                   outputOptions($galleries, 'GalleryID', 'GalleryName');
                ?>
            </select>
          </div>   
          <div class="field">
            <label>Shape</label>
            <select class="ui fluid dropdown" name="shape">
                <option value='0'>Select Shape</option>  
                <?php  
                    outputOptions($shapes, 'ShapeID', 'ShapeName');
                ?>
            </select>
          </div>   

            <button class="small ui orange button" type="submit">
              <i class="filter icon"></i> Filter 
            </button>    

        </form>
    </section>
    

    <section class="twelve wide column">
        <h1 class="ui header">Paintings</h1>
        <h3 class="ui sub header"><?php echo $filter; ?></h3>
        <ul class="ui divided items" id="paintingsList">
            
          <?php  while ($work = $paintings->fetch()) { ?>

          <li class="item">
            <a class="ui small image" href="single-painting.php?id=<?php echo $work['PaintingID']; ?>"><img src="images/art/works/square-medium/<?php echo $work['ImageFileName']; ?>.jpg"></a>
            <div class="content">
              <a class="header" href="single-painting.php?id=<?php echo $work['PaintingID']; ?>"><?php echo utf8_encode($work['Title']); ?></a>
              <div class="meta"><span class="cinema"><?php echo makeArtistName($work['FirstName'],$work['LastName']); ?></span></div>        
              <div class="description">
                <p><?php echo utf8_encode($work['Excerpt']); ?></p>
              </div>
              <div class="meta">     
                  <strong><?php echo '$' . number_format($work['MSRP'],0); ?></strong>        
              </div>        
              <div class="extra">
                <a class="ui icon orange button" href="cart.php?id=<?php echo $work['PaintingID']; ?>"><i class="add to cart icon"></i></a>
                <a class="ui icon button" href="favorites.php?id=<?php echo $work['PaintingID']; ?>"><i class="heart icon"></i></a>          
              </div>        
            </div>      
          </li>
            
          <?php } ?>



        </ul>        
    </section>  
    
</main>    
    

    
  <footer class="ui black inverted segment">
      <div class="ui container">footer for later</div>
  </footer>
</body>
</html>