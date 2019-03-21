
<section class="ui container">
    <h3 class="ui dividing header">Related Works</h3>
    <div class="ui  stackable equal width grid ">
			
			<?php 
			
			while ($work = $paintings->fetch()){
				
					echo '<div class="column">';
					echo '<div class="ui fluid card">';
					echo '<a href="single-painting.php?id='.$work['PaintingID'].'" class="ui medium image"><img src="images/art/works/square-medium/'.$work['ImageFileName'].'.jpg" alt=""></a>';
          echo '<div class="content">';
					echo '<h5 class="ui header">';
      		echo '<a href="#">'.$work['Title'].'
              <span class="sub header">'.$work['Description'].'</span></a>';
					
					echo '</h5>';
					echo '</div>';
							echo '</div>';
			echo '</div>';
				
			}
				
	
			?>
    
     
    </div>
</section>  