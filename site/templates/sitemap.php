<?php 

/**
 * Site map template
 *
 */

include("./_header.inc"); 

function sitemapListPage($page) {

	echo "<li><a href='{$page->url}'>{$page->title}</a> ";	

	if($page->numChildren) {
		echo "<ul>";
		foreach($page->children as $child) sitemapListPage($child); 
		echo "</ul>";
	}

	echo "</li>";
}
?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
			<?php
			echo "<ul class='sitemap'>";
			sitemapListPage($pages->get("/")); 
			echo "</ul>";
			?>
			</div>
		</div>
	</div>

<?php

include("./_footer.inc"); 

