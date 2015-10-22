<?php

include("./_header.inc"); 

$count = 0;
if($q = $sanitizer->selectorValue($input->get->q)) {

	// Send our sanitized query 'q' variable to the whitelist where it will be
	// picked up and echoed in the search box by the head.inc file.
	$input->whitelist('q', $q); 

	// Search the title, body and sidebar fields for our query text.
	// Limit the results to 50 pages. 
	// Exclude results that use the 'admin' template. 
	$matches = $pages->find("title|body|headline|summary%=$q, limit=6, template=news-single|event-single|project-single"); 

	$pagination = $matches->renderPager(array(
	    'nextItemLabel' => "&raquo;",
	    'previousItemLabel' => "&laquo;",
	    'listMarkup' => "<ul class='pagination'>{out}</ul>",
	    'itemMarkup' => "<li class='{class}'>{out}</li>",
	    'linkMarkup' => "<a href='{url}'>{out}</a>",
	    'currentItemClass' => 'active'     
	));

	$count = count($matches); 

}

?>

<!--NOTICIAS -->
<section class="sec-noticias">

	<div class="container cont-noticias">

		<?php include("./_breadcrumb.inc"); ?>
        
        <div class="row cont-post-noticias">

			<?php if($count) { ?>
		      <div class="col-xs-12">
		      	<p class="lead"><?php echo sprintf(_n('Se encontró %d artículo para su búsqueda "%s".','Se encontraron %d artículos para su búsqueda "%s".',$count),$count,$q);?></p>
		      </div>
	        
	          <?php foreach($matches as $n): ?>
	            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	              <div class="noticia">
	                    <?php
	                      $firstimage = $n->images->first();
	                      if($firstimage){
	                        $thumb = $firstimage->size(600 , 400);
	                      }
	                    ?>
	                    <?php if($firstimage){?>
	                      <img alt="<?php echo $thumb->description; ?>" src="<?php echo $thumb->url; ?>" class="img-responsive">
	                    <?php } else {?>
	                      <span class="img-placeholder-responsive img-placeholder-responsive-6"><i class="fa fa-bell-o"></i></span>
	                    <?php }?>
	                    <p class="fecha text-right"><?php 
		                    switch ($n->template) {
			                    case 'news-single':
			                      $label = 'NOTICIA';
			                      break;
			                    case 'event-single':
			                      $label = 'EVENTO';
			                      break;
			                    case 'project-single':
			                      $label = 'PROYECTO';
			                      break;
			                  }

	                    	echo $label;
	                    ?></p>
	                    <h3 class="text-uppercase"><?php echo $n->title;?></h3>
	                    <p><?php echo $n->headline;?></p>

	                    <p class="text-center"><a class="ver-mas" href="<?php echo $n->url;?>" style="color:#7a8791">LEER MÁS</a></p>
	              </div>
	            </div>   

	          <?php endforeach; ?>

			<?php } else { ?>
				<div class="col-xs-12">
		            <p class="lead"><?php echo __('No se encontraron artículos para su búsqueda.');?></p>
					<p><?php echo __('Por favor, busque nuevamente.')?></p>
					</br>
					</br>
					</br>
				</div>
			<?php } ?>

        </div>

        <div class="row">        
            <div class="text-center">
				<?php echo $pagination; ?>
            </div>        
		</div>

    
    </div>

</section>  
       
<?php

include("./_footer.inc"); 

