<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Museum of the Modern Snowglobe: <?php echo $title_for_layout?></title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="alternate" type="application/rss+xml" title="Museum of the Modern Snowglobe" href="http://feeds.feedburner.com/MuseumOfTheModernSnowglobe">
	<?php echo $html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js'); ?>
	<?php echo $html->script('http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js'); ?>
	

	<?php echo $html->css('/js/colorbox/colorbox'); ?>
	<?php echo $html->script('colorbox/jquery.colorbox-min'); ?>

	<?php echo $html->css('/js/jquery.bxSlider/bx_styles/bx_styles.custom'); ?>
	<?php echo $html->script('jquery.bxSlider/source/jquery.bxSlider'); ?>
	
	
	<?php echo $html->script('moms'); ?>
	<?php echo $html->css('main'); ?>
	<?php echo $scripts_for_layout ?>

	<!--[if lt IE 7]>
	<style type="text/css">
		#browser_message {display:block;}
		#browser_reset {height:35px;}
	</style>
	<![endif]-->	
</head>
<body>
	
<div id="browser_message">
	This site functions at its best in a modern browser such as <a href="http://www.google.com/chrome">Chrome</a>, 
	<a href="http://www.apple.com/safari/">Safari</a>, <a href="http://www.mozilla.com/firefox/">Firefox</a>, 
	or <a href="http://www.opera.com/browser/">Opera</a>. It will work in IE8 as well.
</div>
<div id="browser_reset"></div>

<div id="header">
	<?php echo $this->element('title'); ?>
	<?php echo $this->element('menu'); ?>
</div>

<?php echo $content_for_layout ?>

<?php echo $this->element('footer'); ?>

<?php echo $this->element('google-analytics'); ?>

<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
</body>
</html>