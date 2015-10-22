<?php 

$areaParent = $pages->get('template=areas');

?>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cont-sidebar">

        <div class="cont-menu-lateral">
          <h2>ÁREAS DE TRABAJO</h2>
          <?php foreach ($areaParent->children as $area):?>
                <a href="<?php echo $area->url;?>" class="item-menu-lateral"><?php echo $area->title;?></a>
          <?php endforeach;?>
        </div>   
    
    </div>    

</div>
