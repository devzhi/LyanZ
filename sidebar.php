	<div seen="false" class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
	  <h3 class="w3-bar-item">Menu</h3>
	  <a href="<?php $this->options->siteUrl(); ?>" class="w3-bar-item w3-button">Home</a>
	  <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}" class="w3-bar-item w3-button">{title}</a>'); ?>
	  <?php #$this->need('links.php'); ?>
	</div>