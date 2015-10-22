<?php 

include("./_header.inc"); 

?>


<!--NOTICIAS -->
<section class="sec-actividades">

<div class="container cont-contenido">
    
  	<?php include("./_breadcrumb.inc"); ?>

	<div class="row">
    
    	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cont-page-unidad">
        
            
            <h2><?php echo $page->title; ?></h2>
            
            <?php echo $page->body ?>

			<?php foreach($page->children as $child) {
					$firstimage = $child->images->first(); 
					$thumb = $firstimage->size(700, 700);?>
		  			<div class="row cont-equipo-unidad" >
		            
		            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                	<img src="<?php echo $thumb->url;?>" class="img-responsive" alt="<?php echo $child->title;?>">
		                </div>
		               	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

							<h3><?php echo $child->title;?></h3>
		                    
		                    <p class="bajada"><?php echo $child->headline;?></p>
		                    
		                    <?php echo $child->body;?>

		                </div>  
		            
		            </div>

				<?php } ?>
        </div>
    
		<?php include("./_sidebar_team.inc"); ?>  
    
    </div>

</div>

</section>  

<?php

include("./_footer.inc");
