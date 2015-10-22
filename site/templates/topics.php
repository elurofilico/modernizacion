<?php 

include("./_header.inc"); 

?>


<!--NOTICIAS -->
<section class="sec-actividades">

<div class="container cont-contenido">
    
	<?php include("./_breadcrumb.inc"); ?>

	<div class="row">
    
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
          <div class="panel-group" id="accordion-topics" role="tablist" aria-multiselectable="true">
              
            <?php foreach($page->children as $topic) { ?>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo $topic->id;?>">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-topics" href="#collapse<?php echo $topic->id;?>" aria-expanded="true" aria-controls="collapse<?php echo $topic->id;?>">
                      <h5><span class="title"><?php echo $topic->title;?></span><span class="hidden-xs subtitle"><?php echo $topic->headline;?></span><span class="arrow pull-right"></span></h5>
                    </a>
                  </h4>
                </div>
                <div id="collapse<?php echo $topic->id;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $topic->id;?>">
                  <div class="panel-body">
                  
                  		<div class="row">
                        
                        	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="row">
                              <div class="col-sm-4">
                              	<img class="img-responsive" src="<?php echo $config->urls->templates?>img/eje-<?php echo $topic->name?>.png" />
                              </div>
                              <div class="col-sm-8">
                              	<h1><strong><?php echo $topic->summary;?></strong></h1>
                                <p class="text-center">
                                  <a class="ver-mas" href="<?php echo $topic->url;?>">LEER MÁS</a>
                                </p>
                              </div>
                            </div>
                        	</div>
                        	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        		<div class="cont-menu-ejes">
                           		<?php foreach($topic->children as $project): ?>
                               	<a class="item-menu-ejes" href="<?php echo $project->url?>"><?php echo $project->title?></a>
					                    <?php endforeach; ?>
           						     </div>  
                        	</div>                           
                      
                      </div>
                    
                  </div>
                </div>
              </div>

            <?php } ?>

            </div>
        
        </div>

    
    </div>

</div>

</section>       

<?php

include("./_footer.inc");

