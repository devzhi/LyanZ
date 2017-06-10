<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="w3-card-4 w3-padding-16 w3-margin-top">

<div class="w3-container w3-brown">
  <h3>撰写评论</h3>
</div>

<form id="comment_form" class="w3-container" method="post" action="<?php $this->commentUrl() ?>" role="form">
    <label>昵称 / Name</label>
    <input type="text" name="author" class="w3-input w3-border w3-light-grey" value="<?php $this->remember('author'); ?>">
    <label>邮箱 / E-mail</label>
    <input type="text" name="mail" class="w3-input w3-border w3-light-grey" value="<?php $this->remember('mail'); ?>">
    <label>主页 / Url</label>
    <input type="text" name="url" class="w3-input w3-border w3-light-grey" value="<?php $this->remember('url'); ?>">
    <label>内容 / Content</label>
    <textarea rows="10" cols="50" name="text" class="w3-input w3-border w3-light-grey"><?php $this->remember('text'); ?></textarea>

    <button type="submit" class="w3-btn w3-button w3-block w3-brown w3-margin-top">提交 / Submit</button>

    <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
</form>

</div>

<ul class="w3-ul w3-card-4 w3-margin-top w3-container w3-padding-16">
    <div class="w3-container w3-indigo"><h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3></div>
    
    <?php $this->comments()->to($comments); ?>
    <?php while($comments->next()): ?>
    <li class="w3-padding-16">
        <span class="w3-large"><?php $comments->author(); ?></span><br>
        <span><?php $comments->content(); ?></span><br>
        <span class="w3-right"><?php $comments->date('F jS, Y'); ?></span>
    </li>
    <?php endwhile; ?>
</ul>

