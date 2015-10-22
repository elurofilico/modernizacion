<div class="banner-sidebar-container">

  <?php $bannersSidebar = $pages->get("template=banners")->children;
    if($bannersSidebar->count()){

  ?>

        <?php
          foreach ($bannersSidebar as $banner) {
                $img = $banner->images->first();

                if($img){ ?>
                  <div class="col-xs-12 banner-sidebar-item">
                    <a href="<?php echo $banner->link;?>" target="_blank"><img src="<?php echo $img->url; ?>" class="img-responsive" alt="<?php echo $img->description; ?>"/></a>
                  </div>
                <?php } ?>

          <?php } ?>

  <?php } ?>

</div>
