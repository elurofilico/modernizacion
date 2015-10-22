  <h1 class="title-block second-child"><?php echo __('Próximos eventos');?></h1>
  <div class="top-stories">

<?php

    $today = date('Y-m-d');

    $sidebarEvents = $pages->find('template=event-single,limit=3,start=0,sort=date,date>='.$today);

          foreach($sidebarEvents as $child) { 
            if($page != $child){
              $firstimage = $child->images->first(); 
              if($firstimage){
                $thumb = $firstimage->size(50, 50);
              }?>
              <div class="item">
              <?php if($firstimage){ ?>
                <a href="<?php echo $child->url;?>"><img src='<?php echo $thumb->url;?>' alt='<?php echo $thumb->description;?>' /></a>
              <?php } else { ?>
                <a href="<?php echo $child->url;?>"><span class="img-placeholder-50"><i class="fa fa-calendar"></i></span></a>
              <?php } ?>


                <div class="text">
                  <h3><a href="<?php echo $child->url;?>"><?php echo $child->title;?><br/><small><?php echo $child->date;?></small></a></h3>
                  
                </div>
              </div>

<?php          
            } //if
          } //foreach
        ?>

  </div>
