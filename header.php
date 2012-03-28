<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
<link rel="stylesheet" type="text/css"  href="<?php $this->options->themeUrl('style.css'); ?>" />
	<?php $this->header(); ?>
</head>

<body class="sidebars">

<div id="navigation"></div>

<div id="wrapper">
<div id="container" class="clear-block">

<div id="header">
<div id="logo-floater">
<h1><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?> - <?php $this->options->description(); ?>" rel="home"><?php $this->options->title(); ?></a></h1>
</div>
<ul class="links primary-links">
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
			<?php while($pages->next()): ?>
			<li <?php if($this->is('page', $pages->slug)): ?> class="page-item" <?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
			<?php endwhile; ?>
</ul>                
</div> <!-- /header -->


<?php include('sidebar_left.php'); ?>


<div id="center"><div id="squeeze"><div class="right-corner"><div class="left-corner">
<!-- begin content -->
<div class="node">