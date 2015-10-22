<?php
include("./_header.inc");
?>

<div class="container">
	<div class="row">
	  <div class="col-sm-6">
		  <?php 
		  	$img = $page->images->first();
		  	if($img){
		  		$thumb = $img->size(750, 750);
		  	}
		  ?>
		  	<?php if($img){ ?>
		 		<img src="<?php echo $thumb->url; ?>" class="img-responsive" alt="<?php echo $thumb->description; ?>"/>
			<?php } ?>
	  </div>
	  <div class="col-sm-6">
        <p class="text-muted"><?php echo __('Miembro de');?> <a href="<?php echo $page->parent->url;?>"><?php echo $page->parent->title;?></a></p>
	    <h1 class="title-block second-child"><?php echo $page->title; ?></h1>
        <hr>
	    <p class="lead text-red"><?php echo $page->headline; ?></p>
	    <?php echo $page->body; ?>
	  </div>
	</div> <!-- / .row -->
	<hr/>

<?php if($page->siblings->count()-1) :?>

	<div class="row">
	  <div class="col-sm-12">
	    <h1 class="title-block"><?php echo __('Otros integrantes de ');?>  <a href="<?php echo $page->parent->url;?>"><?php echo $page->parent->title;?></a></h1>
	    <hr class="title-hr" />
	  </div>
	   	<?php foreach($page->siblings->not("id=".$page->id) as $i=>$child) :?>
			<?php 
				$firstimage = $child->images->first(); 
				if($firstimage){
					$thumb = $firstimage->size(750, 500);
				}
				?>
				  <div class="col-sm-4">
				    <div class="portfolio-item"><a href="<?php echo $child->url; ?>">
				      <div class="img">
			        	<?php if($firstimage){?>
				        	<img class="img-responsive" src="<?php echo $thumb->url; ?>" alt="<?php echo $thumb->description; ?>">
			      		<?php } else {?>
			      			<span class="img-placeholder-responsive-4"><i class="fa fa-user"></i></span>
			      		<?php }?>
				      </div>
				      <div class="info">
				        <h4><?php echo $child->title; ?></h4>
				        <p class="text-muted"><?php echo $child->headline; ?></p>
				      </div></a>
				    </div>
				  </div>
		<?php endforeach;?>

	</div> <!-- / .row -->

<?php endif;?>

</div> <!-- / .container -->


<?php 
include("./_footer.inc"); 
?>
