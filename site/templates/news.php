<?php

include("./_header.inc"); 

$results = $page->children('limit=6');

$pagination = $results->renderPager(array(
    'nextItemLabel' => "&raquo;",
    'previousItemLabel' => "&laquo;",
    'listMarkup' => "<ul class='pagination'>{out}</ul>",
    'itemMarkup' => "<li class='{class}'>{out}</li>",
    'linkMarkup' => "<a href='{url}'>{out}</a>",
    'currentItemClass' => 'active'     
));

?>

<!--NOTICIAS -->
<section class="sec-noticias">

	<div class="container cont-noticias">

		<?php include("./_breadcrumb.inc"); ?>
        
        <div class="row cont-post-noticias">
        
          <?php foreach($results as $n): ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
                    <p class="fecha text-right"><?php echo $n->created_at;?></p>
                    <h3 class="text-uppercase"><?php echo $n->title;?></h3>
                    <p><?php echo $n->headline;?></p>

                    <p class="text-center"><a class="ver-mas" href="<?php echo $n->url;?>">LEER MÁS</a></p>
              </div>
            </div>   

          <?php endforeach; ?>

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
