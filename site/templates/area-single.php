<?php

include("./_header.inc"); 

?>

<!--NOTICIAS -->
<section class="sec-actividades">

	<div class="container cont-contenido">
	    
		<?php include("./_breadcrumb.inc"); ?>

		<div class="row">
	    
	    	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cont-page-unidad cont-post-single">
	        
	            
	            <h1><?php echo $page->title;?></h1>
	            
				<p>
	               <?php echo $page->summary;?>
                </p>

	  			<div class="row">

	                <?php foreach($page->children as $i=>$child): 
	                	$firstimage = $child->images->first(); 
                      	if($firstimage){
                          $thumb = $firstimage->size(700, 700);
                        }
		                ?>

						<div class="col-md-4 col-sm-6 col-xs-12">
				            <div class="team-member">
				              <div class="team-picture shadow-effect">
				                <?php if($firstimage){?>
                              		<img class="img-responsive" src="<?php echo $thumb->url; ?>" alt="<?php echo $thumb->title; ?>">
	                            <?php } else {?>
	                              	<span class="img-placeholder-responsive-4-9"><i class="fa fa-user"></i></span>
	                            <?php }?>
				              </div>
				              <h5 class="text-center">
					              <span class="text-blue"><?php echo $child->title;?></span>
					              <br/>
					              <?php echo $child->headline;?>
				              </h5>
				            </div>
			          	</div>

					<?php endforeach; ?>

	        	</div>

	        	<?php if($page->projects->count()) :?>

		           	<div class="row">
		    
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <ol class="breadcrumb" style=" background:#f7f7f7; border-bottom:2px solid #b9cad4; padding: 10px 15px;;">
			                    <li>Proyectos Asociados:</li>
					   			<?php foreach($page->projects as $i=>$child) :?>
			                        <li><a href="<?php echo $child->url; ?>"><?php echo $child->title; ?></a></li>
								<?php endforeach;?>
		                    </ol>
		                </div>
		            </div>

		        <?php endif;?>
	            
	            <?php include("./_share_buttons.inc"); ?>
	            
	        </div>

			<?php include("./_sidebar_team.inc"); ?>   
	    
	    </div>

	</div>

</section>  

<?php

include("./_footer.inc"); 
