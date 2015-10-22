<?php
include("./_header.inc");
?>

<!--NOTICIAS -->
<section class="sec-actividades">

	<div class="container cont-contenido">
	    
		<?php include("./_breadcrumb.inc"); ?>

		<div class="row">
	    
	    	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cont-post-single">
	            
	            <h1><?php echo $page->title;?></h1>
	            <?php if ($page->summary != ''):?>
		            <h4><?php echo $page->summary;?></h4>
		        <?php endif; ?>
	            
				<?php if($page->images->count()) :?>
		            <?php 
		              $firstimage = $page->images->first();
		              if($firstimage){
		                $thumb = $firstimage->size(750, 500);
		              }
		            ?>
		            <img src='<?php echo $thumb->url;?>' alt='<?php echo $thumb->description;?>' class="img-responsive" />
				<?php endif;?>

	            <?php echo $page->body; ?>
	            	            
				<?php include("./_share_buttons.inc"); ?>      

	        </div>
	    
	    
	    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cont-sidebar">
	        
	        	<div class="cont-menu-lateral">
	            
	            	<h2>Ejes estratégicos</h2>
	                
					<?php foreach($page->parent()->siblings("id!=$page") as $i=>$child) :?>
		              <a href="<?php echo $child->url; ?>" class="item-menu-lateral"><?php echo $child->title; ?></a>
					<?php endforeach;?>
        	
	            </div>  

	            <?php if(count($page->siblings("id!=$page"))>0):?>

		        	<div class="cont-menu-lateral">
		            
		            	<h2>Otros proyectos del Eje <?php echo $page->parent()->title; ?></h2>
		                
						<?php foreach($page->siblings("id!=$page") as $i=>$child) :?>
			              <a href="<?php echo $child->url; ?>" class="item-menu-lateral"><?php echo $child->title; ?></a>
						<?php endforeach;?>
	        	
		            </div>  
		        <?php endif;?>

	        </div>    
	    
	    </div>

	</div>

</section>  


<?php 
include("./_footer.inc"); 
