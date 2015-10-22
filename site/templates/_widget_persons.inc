  <h1 class="title-block second-child"><?php echo __('Equipo');?></h1>
  <div class="top-stories">

<?php
    $sidebarPersons = $pages->find('template=person-single,limit=3,start=0,sort=random');

          foreach($sidebarPersons as $child) { 
            if($page != $child){
             $firstimage = $child->images->first(); 
              if($firstimage){
                $thumb = $firstimage->size(50, 50);
              }?>
              <div class="item">
              <?php if($firstimage){ ?>
                <a href="<?php echo $child->url;?>"><img src='<?php echo $thumb->url;?>' alt='<?php echo $thumb->description;?>' /></a>
              <?php } else { ?>
                <a href="<?php echo $child->url;?>"><span class="img-placeholder-50"><i class="fa fa-user"></i></span></a>
              <?php } ?>
                <div class="text">
                  <h3><a href="<?php echo $child->url;?>"><?php echo $child->title;?></a></h3>
                  
                </div>
              </div>

<?php          
            } //if
          } //foreach
        ?>

  </div>
