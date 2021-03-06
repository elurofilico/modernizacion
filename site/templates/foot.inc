<hr/>
<hr/>

<h4>Banners</h4>
<?php 
	$matches = $pages->find("template=banner-single"); 

	$count = count($matches); 

	$out = '';

	if($count) {
		$out .= 
			"<ul>";

		foreach($matches as $m) {
			$out .= "<li><p><a target='_blank' href='{$m->link}'>{$m->title}</a></p></li>";
		}

		$out .= "</ul>";

	} else {
		$out .= "<h2>Sorry, no results were found.</h2>";
	}

	echo $out;

?>

<hr/>
<hr/>

				<?php 

				// Output navigation for any children below the bodycopy.
				// This navigation cycles through the page's children and prints
				// a link and summary: 

			/*	if($page->numChildren) {

					echo "<ul class='nav'>";

					foreach($page->children as $child) {
						echo "<li><p><a href='{$child->url}'>{$child->title}</a><br /><span class='summary'>{$child->summary}</span></p></li>"; 
					}

					echo "</ul>";
				}
*/
				?>


			</div><!--/bodycopy-->

		</div><!--/container-->

	</div><!--/content-->

	<div id="footer" class="footer">
			<?php $sitemap = $pages->get('/site-map/'); ?>
			<a href="<?php echo $sitemap->url; ?>"><?php echo $sitemap->title; ?></a></p>
		<div class="container">
			<p>Powered by <a href='http://processwire.com'>ProcessWire Open Source CMS/CMF</a> &copy; <?php echo date("Y"); ?> <a href="http://www.ryancramer.com">Ryan Cramer Design, LLC</a>
		</div>
	</div>

	<?php 

	// If the page is editable, then output a link that takes us straight to the page edit screen:
	if($page->editable()) {
		echo "<a class='nav' id='editpage' href='{$config->urls->admin}page/edit/?id={$page->id}'>Edit</a>"; 
	}

	?>

</body>
</html>
