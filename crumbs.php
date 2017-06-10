<div class="w3-container w3-panel w3-blue-grey">
	<span class="fa fa-home"> <a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo;</span>
	<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
		<span>最新文章</span>
	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
		<span><?php $this->category(); ?> &raquo; <?php $this->title() ?></span>
	<?php else: ?><!-- 页面为其他页时 -->
		<span><?php $this->archiveTitle(' &raquo; ','',''); ?></span>
	<?php endif; ?>
</div>