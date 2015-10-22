<!DOCTYPE html>
<html lang="es">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta property="og:locale" content="es_ES" />
        <meta property="og:title" content="<?php echo $page->get("headline|title"); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.modernizacion.gob.cl<?php echo $page->url?>" />
        <meta name="description" property="og:description" content="<?php echo $page->summary; ?>" />
        <meta property="og:site_name" content="Unidad de Modernizacion y Gobierno Digital - Ministerio Secretaría General de la Presidencia" />
        <meta name="author" content="<?php echo $page->get("headline|title"); ?>">
        <meta property="og:image" content="http://www.modernizacion.gob.cl<?php echo ($page->images && $page->images->first())? $page->images->first()->url : '/site/templates/img/eGob_Header_Alt1.png' ;?>"/>

        <title><?php echo $page->get("headline|title"); ?></title>

        <link rel="shortcut icon" href="ico/gobcl-favicon.ico">
            
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/main.css">
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/clndr.css">
        <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/font-awesome.css">
        <!--[if IE 7]>
          <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->

        <!--bootstrap css -->
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Barra del Estado -->

        <script type="text/javascript">
        window.____aParams = {"gobabierto":"1","buscadore":"1","icons":"1","inverse":"1"};
        (function() {
          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
          po.src = document.location.protocol + '//apis.modernizacion.cl/barra/js/barraEstado.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
        </script>

        <!-- Barra del Estado -->




        <script src="<?php echo $config->urls->templates?>js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "c45743c7-8fe9-4c7b-8a9a-9f3c84ba47e7", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
    </head>
<body><script type="text/javascript">
    var LANG = '<?php echo $user->language->name;?>';
  </script>
  <?php 

    $homepage = $pages->get("/");

    $searchPath = $config->urls->root.(($user->language->name=='default')?'es':'en').'/search/'; 


    function parseEventDate($date, $user){
      $ES_MONTHS = array(
        '1'=>'ENE',
        '2'=>'FEB',
        '3'=>'MAR',
        '4'=>'ABR',
        '5'=>'MAY',
        '6'=>'JUN',
        '7'=>'JUL',
        '8'=>'AGO',
        '9'=>'SEP',
        '10'=>'OCT',
        '11'=>'NOV',
        '12'=>'DIC'
        );
      $EN_MONTHS = array(
        '1'=>'JAN',
        '2'=>'FEB',
        '3'=>'MAR',
        '4'=>'APR',
        '5'=>'MAY',
        '6'=>'JUN',
        '7'=>'JUL',
        '8'=>'AUG',
        '9'=>'SEP',
        '10'=>'OCT',
        '11'=>'NOV',
        '12'=>'DEC'
        );
      $resp = array();
      $parts = explode(' - ', $date);

      if(!$user->language->name || $user->language->name=='default'){
        $resp['day'] = $parts[0];
        $resp['month'] = $ES_MONTHS[$parts[1]];
      }else{ 
        $resp['day'] = $parts[1];
        $resp['month'] = $ES_MONTHS[$parts[0]];
      }

      return $resp;

    }

    ?>
    <?php 

      // remember what language is set to
      $savedLanguage = $user->language; 

      foreach($languages as $language) {

        // if user is already viewing the page in this language, skip it
        if($language->id == $savedLanguage->id) continue; 

        // if this page isn't viewable (active) for the language, skip it
        if(!$page->viewable($language)) continue;

        // set the user's language, so that the $page->url and any other
        // fields we access from it will be reflective of the $language
        $user->language = $language; 

        // output a link to this page in the other language
        //echo "<li><a href='$page->url'>$language->title</a></li>";
      }
      // restore the original language setting 
      $user->language = $savedLanguage; 

      //Header image
      /*$firstimageHome = $homepage->noticia_destacada->images->first();
      if($firstimageHome){
        $thumbHome = $firstimageHome->size(1200, 400)->url;
      } else {
        $thumbHome = $config->urls->templates . 'img/header.png';
      }*/
      ?>
<header style="background-size:cover;background-image:url('<?php echo $config->urls->templates?>img/eGob_Header_Alt1.png')"> 

  <!--div class="container">
    <div class="row">
      <div class="col-xs-12">
        <a href="http://www.onemi.gob.cl" target="_blank"><img src="<?php echo $config->urls->templates?>img/banner-emergencia-980x80.png" class="img-responsive" /></a>
      </div>
    </div>
  </div-->

  <div class="container cont-header" >
      <div class="row">
            
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a id="logo-lineas" href="<?php echo $homepage->url ?>">
              <span class="headline-primary">Unidad de Modernización y Gobierno Digital</span>
              <span class="headline-secondary">Ministerio Secretaría General<br/> de la Presidencia</span>
              <!--img class="" width="150" src="<?php echo $config->urls->templates?>img/logo.png" alt="Logo Modernizacón"-->
            </a>
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-right col-md-push-4"> 
            <form class="navbar-form navbar-left" role="form" id='search_form' action='<?php echo $searchPath;?>' method='GET'>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="<?php echo __('Buscar'); ?>" name='q' id='search_query' value='<?php echo htmlentities($input->whitelist('q'), ENT_QUOTES, 'UTF-8'); ?>' />
              </div>
               <button type="submit" class="btn btn-default"></button>              
            </form>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-right text-right cont-redes-sociales">               
            <a target="_blank" href="https://www.facebook.com/ModernizacionyGobiernoDigital" class="icon-face"></a>
            <a target="_blank" href="https://twitter.com/Modernizacioncl" class="icon-twtr"></a>
            <!--a target="_blank" href="#" class="icon-mail"></a-->
          </div>          
          
      </div>
    
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-6 col-lg-push-6">
          <div class="header-headline">
            <p class="text-bajada"></p>
          </div>
        </div>

      </div>

      <!--div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-push-7 col-lg-push-7">
          <div class="cont-slide-bajada-header">
            <p class="text-bajada"><?php echo $homepage->noticia_destacada->title;?></p>
            <a class="ver-mas" href="<?php echo $homepage->noticia_destacada->url;?>">Ver más</a>
          </div>
        </div>

      </div-->

      <div class="row">
        
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Más</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">

                       <?php
                      
                        
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

                        <li class="hidden-sm"><a target="_blank" href="http://www.observatoriodigital.gob.cl/">Observatorio</a></li>

                      </ul>
                    </div><!-- /.navbar-collapse -->
                    
                  </div><!-- /.container-fluid -->
                </nav>
                
          </div>           
      </div>
        
  </div>
</header>

