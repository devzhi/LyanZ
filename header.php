<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/w3.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/lyanz.css'); ?>">
	<script src="<?php $this->options->themeUrl('/js/vue.js'); ?>"></script>
	<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
</head>
<body class="w3-container">
