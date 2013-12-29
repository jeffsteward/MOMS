<?php $snowglobes = $this->requestAction(array('controller' => 'snowglobes', 'action' => 'index'));  ?>
<?php foreach ($snowglobes as $snowglobe): ?>
	<div class="globe">
		<?php if (is_null($snowglobe['PrimaryImage']['FileName'])) {
			$primaryImage = 'no_image.jpg';
		} else {
			$primaryImage = $snowglobe['PrimaryImage']['FileName'];
		}
		?>
	
		<?php echo $html->link(
			$html->image("snowglobes/75x75/".$primaryImage, 
					array("title" => $snowglobe['Snowglobe']['Name'],
					"alt" => "snowglobe",
					"id" => $snowglobe['Snowglobe']['SnowglobeID'])),
			array('controller' => 'snowglobes', 'action' => 'view', $snowglobe['Snowglobe']['SnowglobeID']),
			array('escape' => false, 'name' => 'globe')); ?>				   
	
	</div>
<?php endforeach; ?>