<div id="pagecontent">

<h1>Donors</h1>

<h4><?php echo $donor['Donor']['DisplayName'];?></h4>

<?php foreach ($donor['Snowglobes'] as $snowglobe): ?>

	<div class="globedata" style="width:500px;margin-bottom:20px;padding-bottom:20px;border-bottom:1px solid #c0c0c0">
	<?php echo $snowglobeFormatter->renderPrimaryImage($snowglobe, 'medium', array('style'=>'float:left;'));?>
	<table border="0" cellspacing="1" cellpadding="1">
		<tr><td>Name: </td><td><?php echo $snowglobe['Name']; ?></td></tr>
		<tr><td>Date: </td><td><?php echo $snowglobe['DateAcquired'].' '.$snowglobe['Year']; ?></td></tr>
		<tr><td>Location: </td><td><?php echo $snowglobe['Location']['FullLocation']; ?></td></tr>
		<tr><td>Cost: </td><td><?php echo $this->Number->currency($snowglobe['Cost'],'USD',array('after'=>false,'zero'=>'')); ?></td></tr>
		<tr><td>Notes: </td><td><?php echo $snowglobe['Notes']; ?></td></tr>
		<tr><td>Description: </td><td><?php echo $snowglobe['Description']; ?></td></tr>
	</table>
	</div>
<?php endforeach; ?>

</div>