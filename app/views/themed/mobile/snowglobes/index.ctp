<ul data-role="listview" data-filter="true">
<?php foreach ($snowglobes as $snowglobe): ?>
	<li>
		<?php echo $snowglobeFormatter->renderPrimaryImage(
					$snowglobe, 
					'small',
					array("title" => $snowglobe['Snowglobe']['Name'],
					"height" => "80",
					"alt" => "snowglobe",
					"id" => $snowglobe['Snowglobe']['SnowglobeID'])); ?>

		<h3><?php echo $html->link($snowglobe['Snowglobe']['Name'],
				array('controller' => 'snowglobes', 'action' => 'view', $snowglobe['Snowglobe']['SnowglobeID']),
				array('escape' => false, 'name' => 'globe')); ?></h3>

		<p><?php echo $snowglobe['Location']['FullLocation']; ?></p>
	</li>
<?php endforeach; ?>
</ul>