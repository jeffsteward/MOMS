<div id="pagecontent">

<h4>About</h4>

<div class="infosection">
<?php echo $this->Html->image('gallery_view-1.jpg', array('title' => 'gallery view', 'alt' => 'gallery view', 'style' => 'float:right;padding-left:20px;height:250px;'));?>

<p>It began innocently enough: a snowglobe from Philadelphia, sent to a friend in
Boston in 1997 inside a tiny, handcrafted wooden box. A few more particularly
kitschy examples were acquired, and soon there were a dozen snowglobes on a
windowsill. Now it was a collection, and once friends and family decide you
collect something, you can't fight it.Who among us hasn't gotten a strange gift
from a grandparent with a note like, "I remembered you collect unicorns!"
(twenty years ago).</p>

<p>Within no time, a dozen snowglobes became fifty, fifty became one hundred.
Why fight it? The collectors were both museum professionals, as were many
of their donors, so began acknowledging gifts with credit lines and accession
numbers. A database was created. A website soon followed. The collection was
even used in a Volkswagen advertisement.</p>

<p>In 2004 the snowglobes were packed up for a move but never got unpacked&mdash;until 
now. Welcome to the first public viewing of the newly christened
Museum of the Modern Snowglobe.</p>
</div>


<div class="infosection">
<h4>Collection Guidelines</h4>

<ul>
<li>The donor must have visited the location in question. No eBay purchases.</li>
<li>Relief snowglobes are preferred&mdash;the ones with tiny sculptures inside.</li>
<li>Glass globes are not encouraged.</li>
<li>The cheaper, the better.</li>
</ul>
</div>


<div class="infosection">
<h4>MoMS Statistics</h4>

<ul class="factlist">
<li>First snowglobe: <?php echo $this->Html->link('1997, Philadelphia', array('controller' => 'snowglobes', 'action' => 'view', 42), array('name' => 'globe'));?></li>
<li>Most recent acquisition: <?php echo $this->Html->link('2013, Sweden', array('controller' => 'snowglobes', 'action' => 'view', 206), array('name' => 'globe'));?></li>
<li>Total snowglobes: 196</li>
<li>Museum groundbreaking: September 2010</li>
<li>Museum opening: November 6, 2010</li>
<li>Opening weekend attendance: 273</li>
<li>Construction cost: $276.02</li>
<li>Yearly operating budget: $2,850.00</li>
</ul>

<ul class="factlist">
<li>Most snowglobes from: Las Vegas, 6 snowglobes</li>
<li>Most generous donor: <?php echo $this->Html->link('Gina S.', array('controller' => 'donors', 'action' => 'view', 7), array('name' => 'donor')); ?>, 10 snowglobes</li>
<li>Farthest traveled snowglobe: <?php echo $this->Html->link('Hong Kong', array('controller' => 'snowglobes', 'action' => 'view', 193), array('name' => 'globe'));?>, 7,975 miles</li>
<li>Runner up: <?php echo $this->Html->link('Cairo', array('controller' => 'snowglobes', 'action' => 'view', 136), array('name' => 'globe'));?>, 5,431 miles</li>
</ul>
</div>


<div class="infosection" style="min-height:330px;">
<h4>States not yet represented in the collection</h4>

<div style="float:right;">
	<?php echo $googleStaticMap->map(array(
			'center'=>'USA',
			'markers'=>array('color:blue|Alabama,USA',
					'color:blue|Arkansas,USA',
					'color:blue|Idaho,USA',
					'color:blue|Indiana,USA',
					'color:blue|Kansas,USA',
					'color:blue|Kentucky,USA',
					'color:blue|Michigan,USA',
					'color:blue|Mississippi,USA',
					'color:blue|Montana,USA',
					'color:blue|North Dakota,USA',
					'color:blue|Oklahoma,USA',
					'color:blue|Oregon,USA',
					'color:blue|Rhode Island,USA',
					'color:blue|South Dakota,USA',
					'color:blue|Utah,USA',
					'color:blue|Wyoming,USA'),
			'size'=>array(500,290),
			'zoom'=>3));?>
</div>

<ul class="factlist">
<li>Alabama</li>
<li>Arkansas</li>
<li>Idaho</li>
<li>Indiana</li>
<li>Kansas</li>
<li>Kentucky</li>
<li>Michigan</li>
<li>Mississippi</li>
<li>Montana</li>
<li>North Dakota</li>
<li>Oklahoma</li>
<li>Oregon</li>
<li>Rhode Island</li>
<li>South Dakota</li>
<li>Utah</li>
<li>Wyoming</li>
</ul>
</div>


<div class="infosection">
<h4>This site</h4>

<p>This site is built on <a href="http://cakephp.org/" target="_blank">CakePHP</a> 
and <a href="http://www.mysql.com/" target="_blank">MySQL</a>.<br/> 
The comment system is powered by <a href="http://disqus.com" target="_blank">Disqus</a>.<br/>
It uses <a href="http://jquery.com/" target="_blank">jQuery</a>,
<a href="http://jquerymobile.com/">jQuery Mobile</a>, 
<a href="http://bxslider.com/" target="_blank">bxSlider</a>, 
<a href="http://flowplayer.org/tools/index.html" target="_blank">jQuery Tools</a>, and 
<a href="http://colorpowered.com/colorbox/" target="_blank">ColorBox</a> 
for presentation.<br/>
It also uses the <a href="http://code.google.com/apis/chart/" target="_blank">Google Chart API</a> and 
<a href="http://code.google.com/apis/maps/documentation/staticmaps/" target="_blank">Google Static Maps</a> for a few of the visuals.
</p>
</div>

</div>
