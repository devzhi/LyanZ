<?php
/**
 * LyanZ,A Typecho Theme
 * 
 * @package LyanZ 
 * @author 野狼
 * @version 0.0.1
 * @link https://www.sstype.com
 */
	 $this->need('header.php');
	 $this->need('sidebar.php');
?>
	<div style="margin-left: 15%" class="w3-light-grey">
		<div class="w3-container w3-teal">
			<h1><?php $this->options->title(); ?></h1>
			<p><?php $this->options->description() ?></p>
		</div>
		<?php while($this->next()): ?>
		<div style="margin-top: 10px" class="w3-container w3-card-4">
			<div class="lz-list" >
				<a href="<?php $this->permalink() ?>"><h2><?php $this->title() ?></h2></a>
			</div>
			<div class="lz-list" >
				<p><?php $this->content('Continue Reading...'); ?></p>
			</div>
			<div class="lz-list" >
				<p><?php $this->date('F j, Y'); ?></p>
			</div>
		</div>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
	</div>
	<?php $this->need('footer.php'); ?>