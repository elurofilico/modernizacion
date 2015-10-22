<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont-migas">
    	<ol class="breadcrumb">
			<?php

				// Create breadcrumb navigation by cycling through the current $page's
				// parents in order, linking to each:

				foreach($page->parents as $parent) {
					echo "<li><a href='{$parent->url}'>{$parent->title}</a></li>";
				}

				echo "<li class='active'>{$page->title}</li>";

			?>
    	</ol>
    </div>

</div>