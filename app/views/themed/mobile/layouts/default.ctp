<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Museum of the Modern Snowglobe: <?php echo $title_for_layout?></title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>

	<?php echo $html->css('mobile'); ?>
	<?php echo $scripts_for_layout ?>	
</head>
<body>

<div data-role="page">

	<div data-role="header">
		<h1>Museum of the Modern Snowglobe</h1>
	</div>

	<div data-role="content">
		<?php echo $content_for_layout; ?>
	</div>

	<div data-role="footer">
		&nbsp;
	</div>
</div>

<?php echo $this->element('google-analytics'); ?>

<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
</body>
</html>