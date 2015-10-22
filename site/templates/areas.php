<?php 

include("./_header.inc"); 

?>


<section class="sec-actividades">

<div class="container cont-contenido">
    
  <?php include("./_breadcrumb.inc"); ?>

  <div class="row">
    
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cont-post-single">
            
          	<?php 	foreach($page->children as $child): ?>
		            <div class="blog">
		              <div class="blog-desc">
		                <h3 class="blog-title">
		                  <a href="<?php echo $child->url;?>"><?php echo $child->title;?></a>
		                </h3>
		                <p>
		                  <?php echo $child->summary;?>
		                </p>
		                <a class="btn" href="<?php echo $child->url;?>"><?php echo __('Ver más');?></a>
		                <hr/>
		              </div>
		            </div>
          	<?php 	endforeach; ?>
            
            <?php include("./_share_buttons.inc"); ?>

      </div>
   
      <?php include("./_sidebar_team.inc"); ?>

  </div>

</section>  

<?php 

include("./_footer.inc"); 

