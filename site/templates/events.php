<?php

include("./_header.inc"); 

$events = $page->children('sort=date,limit=6');
$pagination = $events->renderPager(array(
    'nextItemLabel' => "&raquo;",
    'previousItemLabel' => "&laquo;",
    'listMarkup' => "<ul class='pagination pull-right'>{out}</ul>",
    'itemMarkup' => "<li class='{class}'>{out}</li>",
    'linkMarkup' => "<a href='{url}'>{out}</a>",
    'currentItemClass' => 'active'     
));

?>

<section class="sec-actividades">

<div class="container cont-contenido">

    <?php include("./_breadcrumb.inc"); ?>

    <div class="row">
    
        <!--div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="cont-filtrar">
              <p>Filtrar Actividades Por: <a class="active">TODAS</a> <a>NACIONAL</a> <a>INTERNACIONAL</a></p>
          </div>
        </div-->
    
    </div>
    
  <div class="row">
    
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cont-post-actividades">
        
          <?php foreach($events as $n): ?>
            <div class="row actividad cont-txt">
                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 cont-img">
                          <?php
                            $firstimage = $n->images->first(); 
                            if($firstimage){
                                $thumb = $firstimage->size(600, 400);
                              }
                          ?>
                          <?php if($firstimage){?>
                            <img alt="<?php echo $thumb->description; ?>" src="<?php echo $thumb->url; ?>" class="img-responsive">
                          <?php } else {?>
                            <span class="img-placeholder-responsive-6-9"><i class="fa fa-calendar"></i></span>
                          <?php }?>
                      </div>
                      
                      <div class="col-xs-2 co3-sm-2 col-md-2 col-lg-1 cont-fecha text-center">
                           <?php $eventDate = parseEventDate($n->date, $user);?>
                           <p class="fecha-num"><?php echo $eventDate['day'];?></p>
                           <p class="fecha-mes"><?php echo $eventDate['month'];?></p>
                      </div>                                          
                      
                      <div class="col-xs-9 col-sm-9 col-md-4 col-lg-5 cont-text-actividad">
                          <h3 class="text-uppercase "><?php echo $n->title;?></h3>
                          <p><?php echo $n->headline;?></p>
                          <p class="text-center"><a class="ver-mas" href="<?php echo $n->url;?>">LEER MÁS</a></p>
                      </div>
            </div>
          <?php endforeach; ?>

      </div>
    
      <?php include("./_sidebar_events.inc"); ?>
    
    </div>
    
    
    <div class="row">        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <?php echo $pagination; ?>
        </div>        
    </div>



</div>

</section>  

<?php

include("./_footer.inc"); 
?>