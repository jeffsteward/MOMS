<div id="pagecontent">

<h4>News</h4>

<div id="news">
<?php foreach ($news as $newsitem): ?>

	<div class="item">
	<div class="title"><?php echo $html->link($newsitem['News']['Title'], array('controller'=>'news', 'action'=>'view', $newsitem['News']['NewsID'])); ?></div>
	<div class="dt"><?php echo $time->format('l, F j, Y, g:iA',$newsitem['News']['NewsDate'] ); ?></div>
	<p><?php echo $newsitem['News']['Content'] ?></p>
	<div class="footer">
		Filed under: <?php echo $newsitem['News']['Category'] ?>
		<span class="comments"><?php echo $html->link('Discuss', array('controller'=>'news', 'action'=>'view', $newsitem['News']['NewsID'], '#'=>'disqus_thread')); ?></span>
	</div>	
	</div>

<?php endforeach; ?>

<?php echo $this->Paginator->next('Next 10 posts >', array('style' => 'font-weight:bolder;'), null, array('class' => 'disabled')); ?>
</div>

</div>

<script type="text/javascript">
    var disqus_shortname = 'museumofthemodernsnowglobe';
    var disqus_developer = 1;

    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>