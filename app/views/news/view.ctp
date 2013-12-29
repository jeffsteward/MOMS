<div id="pagecontent">

<h4>News</h4>

<div id="news">

	<div class="item">
	<div class="title"><a href="#<?php echo $newsitem['News']['NewsID'] ?>"></a><?php echo $newsitem['News']['Title'] ?></div>
	<div class="dt"><?php echo $time->format('l, F j, Y, g:iA',$newsitem['News']['NewsDate'] ); ?></div>
	<p><?php echo $newsitem['News']['Content'] ?></p>
	<div class="footer">Filed under: <?php echo $newsitem['News']['Category'] ?></div>
	</div>

</div>

<?php echo $this->Html->link('Back to all the news', array('controller' => 'news', 'action' => 'index')); ?>

<hr>	

<?php echo $this->element('disqus', array('url' => $html->url(array("controller"=>"news", "action"=>"view", $newsitem["News"]["NewsID"]), true))); ?>

</div>