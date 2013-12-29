<div id="pagecontent">

<h4>Staff Favorites</h4>

<?php foreach ($snowglobes as $snowglobe): ?>
	<div style="float:left;width:200px;">	
		<?php echo $html->link(
			$html->image("snowglobes/200x200/".$snowglobe['PrimaryImage']['FileName'], 
					array("title" => $snowglobe['Snowglobe']['Name'],
					"alt" => "snowglobe",
					"id" => $snowglobe['Snowglobe']['SnowglobeID'])),
			array('controller' => 'snowglobes', 'action' => 'view', $snowglobe['Snowglobe']['SnowglobeID']),
			array('escape' => false, 'name' => 'globe')); ?>	
	</div>	
<?php endforeach; ?>

</div>