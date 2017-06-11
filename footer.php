	<div style="margin-top: 10px" id="lz-foo" class="w3-center w3-card-2 w3-light-grey">
		<div>
			<a href="#" class="fa fa-github fa-lg"></a>
			<a href="#" class="fa fa-weibo fa-lg"></a>
			<a href="#" class="fa fa-envelope fa-lg"></a>
			<a href="<?php $this->options->feedUrl(); ?>" class="fa fa-feed fa-lg"></a>
		</div>
		<div>
			<!--请将统计代码粘贴到这里-->
		</div>
		<h6>&copy; <?php echo date("Y")?> <?php $this->options->title() ?></h6>
		<h6>Power by <a href="http://typecho.org/">Typecho</a> &amp; Theme By <a href="https://github.com/hiyelang/LyanZ">LyanZ</a></h6>
	</div>
</div>
<script src="<?php $this->options->themeUrl('/outdatedbrowser/outdatedBrowser.min.js'); ?>"></script>
<div id="outdated"></div>
	<script>
    outdatedBrowser({
        bgColor: '#f25648',
        color: '#ffffff',
        lowerThan: 'transform',
        languagePath: '<?php $this->options->themeUrl('/outdatedbrowser/lang/zh-cn.html'); ?>'
        })               
	</script>
	<script src="<?php $this->options->themeUrl('/js/lyanz.js'); ?>"></script>
</body>
</html>