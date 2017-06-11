	<div id="lz_sidebar" v-show="lzSideLook" class=" w3-sidebar w3-light-grey w3-bar-block w3-card w3-animate-left" style="width: 15%;">
	  <div class="w3-bar">
	  	<span v-on:click="lzSideLookC(false)" class="w3-bar-item w3-button w3-large">Chose &times;</span>
	  </div>
	  <a href="<?php $this->options->siteUrl(); ?>" class="w3-bar-item w3-button"><span class="fa fa-home"> Home</span></a>
	  <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}" class="w3-bar-item w3-button">{title}</a>'); ?>
      <!--请注释或/注释下面的PHP语句以禁用/启用友情链接-->
	  <?php $this->need('links.php'); ?>

		<form method="post" action="" class="w3-container">
		<input type="text" name="s" class="w3-input w3-border w3-light-grey w3-left w3-threequarter" type="text" value="输入关键字..">
		<button type="submit" class="w3-button w3-right w3-blue-grey w3-quarter"><span class="fa fa-search"></span></button>
		</form>
	  </div>
	</div>
