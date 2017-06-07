<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>

<div style="margin-left: 15%" class="w3-light-grey">
	<div class="w3-container w3-teal">
		<h1><?php $this->options->title(); ?></h1>
	<p><?php $this->options->description() ?></p>
</div>

<div class="w3-panel w3-border w3-light-grey w3-round-large lz-content">
  <h2><?php $this->title() ?></h2>
		<?php $this->content(); ?>
		<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>