	<div id="lz_sidebar" v-show="lzSideLook" class=" w3-sidebar w3-light-grey w3-bar-block w3-card w3-animate-left" style="width: 15%;">
	  <div class="w3-bar">
	  	<span v-on:click="lzSideLookC(false)" class="w3-bar-item w3-button w3-large">Chose &times;</span>
	  </div>
	  <a href="<?php $this->options->siteUrl(); ?>" class="w3-bar-item w3-button"><span class="fa fa-home"> Home</span></a>
	  <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}" class="w3-bar-item w3-button">{title}</a>'); ?>
      <!--请注释或/注释下面的PHP语句以禁用/启用友情链接-->
	  <?php $this->need('links.php'); ?>
	</div>
