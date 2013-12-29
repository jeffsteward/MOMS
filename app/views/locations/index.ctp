<div class="locations index">

<?php foreach ($locations as $location): ?>

	<?php echo $location['Location']['LocationID']; ?>
	<?php echo $location['Location']['Name']; ?>
	<?php echo $location['Location']['Latitude']; ?>
	<?php echo $location['Location']['Longitude']; ?>
	<?php echo $location['Location']['City']; ?>
	<?php echo $location['Location']['State']; ?>
	<?php echo $location['Location']['Country']; ?>
	<?php echo $location['Location']['Continent']; ?>
	<?php echo $location['Location']['RegionID']; ?>
	<?php echo $location['Location']['EnteredDate']; ?>

<?php endforeach; ?>

</div>