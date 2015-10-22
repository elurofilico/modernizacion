<?php 

include("./_header.inc"); 

?>


<!--NOTICIAS -->
<section class="">

  <div class="container cont-contenido">
      
    <?php include("./_breadcrumb.inc"); ?>

    <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cont-post-single">

            <h1><?php echo $page->title;?></h1>
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
          
            <!--div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p class="fecha"><?php echo $page->created_at;?></p>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right text-right">
                
              </div> 
            </div-->
            
            <?php echo $page->body;?>

            <?php include("./_share_buttons.inc"); ?>

        </div>
          
        <?php include("./_sidebar_events.inc"); ?>

      </div>

  </div>

</section>


<?php

include("./_footer.inc"); 

