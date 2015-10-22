<?php 

/**
 * Home template
 *
 */

include("./_header.inc"); 

$news = $pages->get("template=news");
$newsList = $pages->get("template=news")->children('sort=-created_at')->find('limit=3');

$topics = $pages->get("template=topics")->children;

?>

<!--NOTICIAS -->
<section class="sec-noticias">

  <div class="container cont-noticias">

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border-pilares"></div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><h1>NOTICIAS</h1></div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border-pilares"></div>
      </div>
          
      <div class="row cont-post-noticias">
      

          <?php foreach($newsList as $n): ?>
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
                    <h3 class="text-uppercase"><?php echo $n->title;?></h3>
                    <p><?php echo $n->headline;?></p>

                    <p class="text-center"><a class="ver-mas" href="<?php echo $n->url;?>">LEER MÁS</a></p>
              </div>
            </div>   

          <?php endforeach; ?>
          
      </div>
      
      <div class="row">        
          <div class="text-center">
            <a href="<?php echo $news->url;?>" class="btn-mas-noticias">VER TODAS LAS NOTICIAS</a>
          </div>        
      </div>

  </div>

</section>  


<!--PILARES DE TRABAJO -->
<section class="sec-pilares">

    <div class="container cont-pilares">
            
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border-pilares"></div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><h1>NUESTROS <strong>PILARES DE TRABAJO</strong></h1></div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border-pilares"></div>
      </div>

      <div class="row">

          <?php foreach($topics as $topic): ?>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                <a class="icono-pilar text-center" href="<?php echo $topic->url;?>">
                    <img class="img-responsive" src="<?php echo $config->urls->templates?>img/eje-<?php echo $topic->name?>.png" />
                    <h3 class="text-center"><?php echo $topic->title; ?></h3>
                    <p class="text-center"><?php echo $topic->headline; ?></p>
                </a>
            </div>
          <?php endforeach; ?>

      </div>

      <?php include("./_share_buttons.inc"); ?>

      <div class="red-div"></div>

    </div>

</section>





<?php

include("./_footer.inc"); 

