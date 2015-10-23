<?php $banners = $pages->get("template=banners")->children;
  if(!isset($bannersSidebar) && $banners->count()){
?>

    <div class="container banner-container">    
      <div class="row ">
      <?php
        foreach ($banners as $banner) {
              $img = $banner->images->first();

              if($img){ ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 banner-item">
                  <a href="<?php echo $banner->link;?>" target="_blank"><img src="<?php echo $img->url; ?>" class="img-responsive" alt="<?php echo $img->description; ?>"/></a>
                </div>
              <?php } ?>

        <?php } ?>

      </div>
    </div>

<?php } ?>

<footer>

  <div class="gobline"><div class="azul"></div><div class="rojo"></div></div>
    <div class="container">    
      <div class="row">
        
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " data-twttr-id="twttr-sandbox-0">
            
        <a class="twitter-timeline" href="https://twitter.com/Modernizacioncl" data-widget-id="514860030462410752">Tweets por @Modernizacioncl</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            
      </div>
        
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cont-foot-menu">
                
               <ul class="menu-foot">
                       <?php
                      
                        $homepage = $pages->get("/"); 
                        $menuChildren = $homepage->children;
                        $menuChildren->prepend($homepage); 
                    
                        foreach($menuChildren as $child) {
                          if($child->template!='sitemap'){
                            $class = $child === $page->rootParent ? 'active' : '';
                            $class2 = $child === $homepage ? 'hidden-sm' : '';
                            echo "<li class='$class $class2'><a class='$class $class2' href='{$child->url}'>{$child->title}</a></li>";
                          }
                        }

                        ?>  
                        <li><a href='http://2011-2014.modernizacion.gob.cl'>Gestión 2011-2014</a></li>   
                </ul>            
    
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cont-foot-info">
                           
                <p><strong>Ministerio Secretaría General de la Presidencia <br>
                Unidad de Modernización y Gobierno Digital <br>
                Gobierno de Chile <br></strong></p>
                
                <p>Teatinos 92, Piso 9, Santiago de Chile | <a href="https://goo.gl/maps/CGYUaii7pAn" target="_blank">Ver mapa</a><br><br>
                Teléfonos: <br> 
                +56 2 2219 8407 <br> 
                +56 2 2219 8327</p>
                
                <p>Contáctenos <a href="mailto:tcostas@minsegpres.gob.cl"><img src="<?php echo $config->urls->templates?>img/contacto.png" /></a></p>
              

                <div id="mc_embed_signup">
                    <form class="form-horizontal" action="//gob.us9.list-manage.com/subscribe/post?u=f099209c5bf71a57eac6aa5e9&amp;id=344f811341" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" role="form" target="_blank" novalidate>

                      <p><strong>Conoce las novedades de la Unidad:</strong></p>

                      <div class="form-group">
                        <div class="col-md-8">
                            <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Correo electrónico" id="mce-EMAIL">
                        </div>
                        <input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default col-md-4" />
                      </div>


                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_f099209c5bf71a57eac6aa5e9_344f811341" tabindex="-1" value=""></div>

                        <div id="mce-responses" class="clear">
                            <div class="response help-block" id="mce-error-response" style="display:none"></div>
                            <div class="response help-block" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                    </form>

                </div>

                <!--End mc_embed_signup-->

                <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  cont-redes-sociales">               
                      
                          <a target="_blank" href="https://www.facebook.com/ModernizacionyGobiernoDigital" class="icon-face"></a>
                          <a target="_blank" href="https://twitter.com/Modernizacioncl" class="icon-twtr"></a>
                          <!--a target="_blank" href="mailto:" class="icon-mail"></a-->
                      </div>          
              
                </div>
                        
              </div>
        </div> <!-- / .row -->

      <div class="row">
          
            <div class="gobline-mini"><div class="azul"></div><div class="rojo"></div></div>

    </div>        

      </div> <!-- / .container -->
     <!-- <div class="gobminiline"><div class="azul"></div><div class="rojo"></div></div> -->
    </footer>


    <script type="text/javascript">var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-23675324-2']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script>


    <script>window.jQuery || document.write('<script src="<?php echo $config->urls->templates?>js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="<?php echo $config->urls->templates?>js/vendor/bootstrap.js"></script>
    <script src="<?php echo $config->urls->templates?>js/vendor/moment-with-locales.min.js"></script>
    <script src="<?php echo $config->urls->templates?>js/vendor/lodash.compat.min.js"></script>
    <script src="<?php echo $config->urls->templates?>js/vendor/clndr.min.js"></script>
    <script src="<?php echo $config->urls->templates?>js/vendor/jquery.sharrre.min.js"></script>
    <script src="<?php echo $config->urls->templates?>js/main.js"></script>

      <?php 

      // If the page is editable, then output a link that takes us straight to the page edit screen:
      if($page->editable()) {
        echo "<a class='btn btn-danger' id='editpage' href='{$config->urls->admin}page/edit/?id={$page->id}'>Editar <i class='fa fa-edit'></i></a>"; 
      }

      ?>

    </body>
</html>
