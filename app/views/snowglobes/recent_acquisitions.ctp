<div id="pagecontent">

<h4>Recent Acquisitions</h4>

<?php foreach ($snowglobes as $snowglobe): ?>
	<div style="float:left;width:200px;">	
		<?php echo $html->link(
			$snowglobeFormatter->renderPrimaryImage($snowglobe, 'medium',
					array("title" => $snowglobe['Snowglobe']['Name'], 
						"alt" => "snowglobe",
						"id" => $snowglobe['Snowglobe']['SnowglobeID'])),

					
			array('controller' => 'snowglobes', 'action' => 'view', $snowglobe['Snowglobe']['SnowglobeID']),
			array('escape' => false, 'name' => 'globe')); ?>	
	</div>	
<?php endforeach; ?>

</div>