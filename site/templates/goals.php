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
            
            <h1 class="titulo-bajada"><strong><?php echo $page->headline;?></strong><?php echo $page->summary;?></h1>
            
            <?php echo $page->body;?>
            
            <?php include("./_share_buttons.inc"); ?>        

      </div>
   
      <?php include("./_sidebar_team.inc"); ?>

  </div>

</section>  

<?php

include("./_footer.inc");
