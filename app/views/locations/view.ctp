<style>
	.location {width:400px;height:125px;}
	.location h4 {margin:10px;}
</style>

<div class="location">

<h4><?php echo $location['Location']['FullLocation']; ?></h4>

<?php foreach ($location['Snowglobes'] as $snowglobe): ?>

	<?php echo $snowglobeFormatter->renderPrimaryImage(
					$snowglobe, 'small',
					array("title" => $snowglobe['Name'])); ?>
	
<?php endforeach ?>

</div>
