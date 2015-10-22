<?php $sidebarWidth = isset($sidebarWidth)?$sidebarWidth:3; ?>

<div class="col-sm-<?php echo $sidebarWidth; ?>">

  <?php include('_widget_news.inc'); ?>

  <?php include('_widget_events.inc'); ?>

  <?php include('_widget_projects.inc'); ?>

  <?php include('_widget_persons.inc'); ?>

</div>