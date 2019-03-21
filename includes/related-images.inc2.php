<section class="ui container">
    <h3 class="ui dividing header">Related Works</h3>
    <div class="ui  stackable equal width grid ">
			
			<?php 
			
<<<<<<< HEAD
			while ($work = $paintings -> fetch()){
=======
			while ($work = $paintings ->fetch()){
              
>>>>>>> a19f7c8a343f7895b7e4396ff3879ac8becee8d9
				
					echo '<div class="column">';
                    echo '<div class="row">';
					echo '<div class="ui fluid card">';
					echo '<a href="single-painting.php?id='.$work['PaintingID'].'" class="ui small image"><img src="images/art/works/square-medium/'.$work['ImageFileName'].'.jpg" alt=""></a>';
          echo '<div class="content">';
					echo '<h5 class="ui header">';
      		echo '<a href="single-painting.php?id='.$work['PaintingID'].'">'.$work['Title'].'
              <span class="sub header">'.$work['Description'].'</span></a>';
					
					echo '</h5>';
					echo '</div>';
							echo '</div>';
             // echo '</div>';
			echo '</div>';
				
			}
				
	
			?>
    
     
    </div>
</section>  