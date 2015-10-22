<?php 

include("./_header.inc"); 

$today = strtotime("now");

$parts = explode(' - ', $page->date);
if($user->language->name == 'default'){
  $eventDate = mktime(0, 0, 0, $parts[1], $parts[0], $parts[2]);
} else {
  $eventDate = mktime(0, 0, 0, $parts[0], $parts[1], $parts[2]);
}

$isPast = ($today > $eventDate);

?>

<!--NOTICIAS -->
<section class="">
<!---->
  <div class="container cont-contenido">
      
    <?php include("./_breadcrumb.inc"); ?>

    <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cont-post-single">
          
          <h1><?php echo $page->title;?></h1>
           <?php if($isPast){ ?>
              <div class="info-board info-board-red text-right">
                <h4><i class="fa fa-ban"></i> <?php echo __('Este evento ya se llevó a cabo, el día: ');?> <?php echo $page->date;?></h4>
              </div>
          <?php } else { ?>
              <div class="info-board info-board-blue text-right">
                <h4><i class="fa fa-calendar fa-2x"></i> <?php echo __('Reserva la fecha: ');?> <?php echo $page->date;?></h4>
              </div>
          <?php } ?>
          <div class="actividad">
          <?php $eventDate = parseEventDate($page->date, $user);?>
            <div class=" cont-fecha text-center pull-left">
              <p class="fecha-num"><?php echo $eventDate['day'];?></p>
              <p class="fecha-mes text-center"><?php echo $eventDate['month'];?></p>
            </div>          
          </div>
          <h4><?php echo $page->summary;?></h4>

          <?php 
            $firstimage = $page->images->first();
            if($firstimage){
              $thumb = $firstimage->size(750, 500);
            }
          ?>
          <?php if($firstimage){ ?>
            <img src='<?php echo $thumb->url;?>' alt='<?php echo $thumb->description;?>' class="img-responsive" />
          <?php } else { ?>
            <span class="img-placeholder-70"><i class="fa fa-bell-o"></i></span>
          <?php } ?>
    
          <br/>

          <?php echo $page->body;?>

          <?php include("./_share_buttons.inc"); ?>        

        </div>
          
        <?php include("./_sidebar_events.inc"); ?>

      </div>

  </div>

</section>


<?php

include("./_footer.inc"); 

?>

