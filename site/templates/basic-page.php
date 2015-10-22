<?php 

include("./_header.inc"); 

?>

      <div class="container">
        <div class="row">
          
          <div class="col-sm-9">
              <h3>
                <?php echo $page->title; ?>
              </h3>
              <hr/>
          		<p class="lead"><?php echo $page->summary;?></p>
		      	<?php echo $page->body;?>
		  </div>

          <?php 
          	include("./_sidebar.inc"); 

          	?>

        </div> <!-- / .row -->
      </div> <!-- / .container -->

<?php

include("./_footer.inc");