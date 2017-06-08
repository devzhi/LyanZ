<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="w3-card-4 w3-padding-16 w3-margin-top">

<div class="w3-container w3-brown">
  <h3>撰写评论</h3>
</div>

<form class="w3-container">
    <label>昵称 / Name</label>
    <input type="text" class="w3-input w3-border w3-light-grey">
    <label>邮箱 / E-mail</label>
    <input type="text" class="w3-input w3-border w3-light-grey">
    <label>主页 / Url</label>
    <input type="text" class="w3-input w3-border w3-light-grey">
    <label>内容 / Content</label>
    <input type="text" class="w3-input w3-border w3-light-grey">

    <button class="w3-button w3-block w3-brown">提交 / Submit</button>
</form>

</div>

<ul class="w3-ul w3-card-4 w3-margin-top w3-padding-16">
    <?php $this->comments()->to($comments); ?>
    <?php while($comments->next()): ?>
    <li class="w3-padding-16">
        <span class="w3-large"><?php $comments->author(); ?></span><br>
        <span><?php $comments->content(); ?></span><br>
        <span class="w3-right"><?php $comments->date('F jS, Y'); ?></span>
    </li>
    <?php endwhile; ?>
</ul>

