<div style="padding:10px;width:400px;">

<?php echo $donor['Donor']['DisplayName'];?>

<p><?php echo $donor['Donor']['Biography'];?></p>
<p><?php echo $donor['Donor']['Statement'];?></p>


<h4>Donated snowglobes</h4>
<?php foreach ($donor['Snowglobes'] as $snowglobe): ?>

	<?php echo $html->image("snowglobes/75x75/".$snowglobe['PrimaryImage']['FileName'],
				array("title" => $snowglobe['Name'],
				"id" => $snowglobe['SnowglobeID'])); ?>
	
<?php endforeach ?>

</div>