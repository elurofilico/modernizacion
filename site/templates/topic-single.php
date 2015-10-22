<?php
include("./_header.inc");
?>

<!--NOTICIAS -->
<section class="sec-actividades">

	<div class="container cont-contenido">
	    
		<?php include("./_breadcrumb.inc"); ?>

		<div class="row">
	    
	    	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cont-post-single">
	            
	            <h1><?php echo $page->title; ?></h1>
	            <h4 class="titulo-bajada"><img class="pull-left logo-topic" width="200" src="<?php echo $config->urls->templates?>img/eje-<?php echo $page->name?>.png" /><?php echo $page->summary; ?></h4>
	            <?php echo $page->body; ?>
	            	            
				<?php include("./_share_buttons.inc"); ?>    

	        </div>
	    
	    
	    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cont-sidebar">
	        
	        	<div class="cont-menu-lateral">
	            
	            	<h2>Proyectos de <?php echo $page->title; ?></h2>
	                
					<?php foreach($page->children as $i=>$child) :?>
		              <a href="<?php echo $child->url; ?>" class="item-menu-lateral"><?php echo $child->title; ?></a>
					<?php endforeach;?>
        	
	            </div>   

	        	<div class="cont-menu-lateral">
	            
	            	<h2>Ejes estratégicos</h2>
	                
					<?php foreach($page->siblings("id!=$page") as $i=>$child) :?>
		              <a href="<?php echo $child->url; ?>" class="item-menu-lateral"><?php echo $child->title; ?></a>
					<?php endforeach;?>
        	
	            </div>  

	        
	        </div>    
	    
	    </div>

	</div>

</section>  

<?php 
include("./_footer.inc"); 
