<div id="pagecontent">

<h4>News</h4>

<div id="news">
<?php foreach ($news as $newsitem): ?>

	<div class="item">
	<div class="title"><a href="#<?php echo $newsitem['News']['NewsID'] ?>"></a><?php echo $newsitem['News']['Title'] ?></div>
	<div class="dt"><?php echo $time->format('l, F j, Y, g:iA',$newsitem['News']['NewsDate'] ); ?></div>
	<p><?php echo $newsitem['News']['Content'] ?></p>
	<div class="categories">Filed under: <?php echo $newsitem['News']['Category'] ?></div>
	</div>

<?php endforeach; ?>
</div>

</div>