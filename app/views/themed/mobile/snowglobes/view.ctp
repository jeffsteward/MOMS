<p>
<?php echo $snowglobeFormatter->renderPrimaryImage(
					$snowglobe, 'large',
					array("title" => $snowglobe['Snowglobe']['Name'], 
					"style" => "width:100%;")); ?>
</p>

<p>
<table border="0" cellspacing="1" cellpadding="1">
	<tr><td>Name: </td><td><?php echo $snowglobe['Snowglobe']['Name']; ?></td></tr>
	<tr><td>Date: </td><td><?php echo $snowglobe['Snowglobe']['DateAcquired'].' '.$snowglobe['Snowglobe']['Year']; ?></td></tr>
	<tr><td>Donor: </td><td><?php echo $snowglobe['Donor']['DisplayName']; ?></td></tr>
	<tr><td>Location: </td><td><?php echo $snowglobe['Location']['FullLocation']; ?></td></tr>
	<tr><td>Cost: </td><td><?php echo $this->Number->currency($snowglobe['Snowglobe']['Cost'],'USD',array('after'=>false,'zero'=>'')); ?></td></tr>
	<tr><td>Dimensions: </td><td><?php echo $snowglobeFormatter->renderBaseDimensions($snowglobe); ?></td></tr>
	<tr><td>Status: </td><td><?php echo $snowglobe['Snowglobe']['Status']; ?></td></tr>
	<tr><td>Condition: </td><td><?php echo $snowglobe['Snowglobe']['Condition']; ?></td></tr>
	<tr><td>On View: </td><td><?php echo ((bool)$snowglobe['Snowglobe']['OnView']? 'Yes': 'No'); ?></td></tr>
	<tr><td>Staff Pick: </td><td><?php echo ((bool)$snowglobe['Snowglobe']['StaffPick']? 'Yes': 'No'); ?></td></tr>
</table>
</p>

<p><?php echo $snowglobeFormatter->renderInterpretation($snowglobe); ?></p>

<hr>

<?php echo $this->element('disqus', array('url' => $html->url(array("controller"=>"snowglobes", "action"=>"view", $snowglobe["Snowglobe"]["SnowglobeID"]), true))); ?>