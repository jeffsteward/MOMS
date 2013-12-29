<div style="float:left;width:600px;">

<h4>Currently On View</h4>

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

</div>