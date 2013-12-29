<div id="pagecontent">

<h1>Donors</h1>

<ul>
<?php foreach ($donors as $donor): ?>
	<li><?php echo $html->link($donor['Donor']['DisplayName'], 
			array('controller' => 'donors', 'action' => 'details', $donor['Donor']['DonorID']));?></li>
<?php endforeach; ?>

</div>	