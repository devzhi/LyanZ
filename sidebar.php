	<div id="lz_sidebar" v-show="lz_side_look" class=" w3-sidebar w3-light-grey w3-bar-block w3-card w3-animate-left" style="width: 15%;">
	  <div class="w3-bar">
	  	<span v-on:click="lz_side_look_c(false)" class="w3-bar-item w3-button w3-large">Chose &times;</span>
	  </div>
	  <a href="<?php $this->options->siteUrl(); ?>" class="w3-bar-item w3-button">Home</a>
	  <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}" class="w3-bar-item w3-button">{title}</a>'); ?>
	  <?php $this->need('links.php'); ?>
	</div>
