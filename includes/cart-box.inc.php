<div class="ui segment">
    <div class="ui form">
        <div class="ui tiny statistic">
          <div class="value">
            <?php echo  '$' . number_format($row['MSRP'],0); ?>
          </div>
        </div>
        <div class="four fields">
            <div class="three wide field">
                <label>Quantity</label>
                <input type="number">
            </div>                               
            <div class="four wide field">
                <label>Frame</label>
                <select id="frame" class="ui search dropdown">
                  <?php foreach ($frames as $frame) { ?>
                    <option>
                      <?php echo $frame['Title']; ?> [ $<?php echo number_format($frame['Price'],0); ?> ]
                    </option>
                  <?php } ?>
                </select>
            </div>  
            <div class="four wide field">
                <label>Glass</label>
                <select id="glass" class="ui search dropdown">
                  <?php foreach ($glasses as $glass) { ?>
                    <option>
                      <?php echo $glass['Title']; ?> [ $<?php echo number_format($glass['Price'],0); ?> ]
                    </option>
                  <?php } ?>
                </select>
            </div>  
            <div class="four wide field">
                <label>Matt</label>
                <select id="matt" class="ui search dropdown">
                  <?php foreach ($mattes as $matt) { ?>
                    <option>
                      <?php echo $matt['Title']; ?> 
                    </option>
                  <?php } ?>
                </select>
            </div>           
        </div>                     
    </div>

    <div class="ui divider"></div>

    <button class="ui labeled icon orange button">
      <i class="add to cart icon"></i>
      Add to Cart
    </button>
    <button class="ui right labeled icon button">
      <i class="heart icon"></i>
      Add to Favorites
    </button>        
</div>  