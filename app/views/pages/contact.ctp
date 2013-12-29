<?php $this->set("title_for_layout", 'Contact Us'); ?>

<div id="pagecontent">

<h4>Contact Us</h4>

<div class="infosection">
<p>Inquiries, donations, exchanges, questions</p>
<p><a href="mailto:contact@museumofthemodernsnowglobe.com">contact@museumofthemodernsnowglobe.com</a></p>
<p>General info</p>
<p><a href="tel:16173000530">617-300-0530</a></p>
</div>

<div class="infosection">
<h4>Follow Us</h4>
<p><a href="http://www.facebook.com/museumofthemodernsnowglobe"><?php echo $this->Html->image('facebook-icon16x16.gif', array('alt' => 'Facebook', 'style' => 'vertical-align:middle;border:0')); ?></a>&nbsp;Find us on Facebook <a href="http://www.facebook.com/museumofthemodernsnowglobe">here</a>.</p>
<p><a href="http://www.flickr.com/photos/museumofthemodernsnowglobe/" rel="alternate" type="application/rss+xml"><?php echo $this->Html->image('flickr-icon16x16.jpg', array('alt' => 'Flickr', 'style' => 'vertical-align:middle;border:0')); ?></a>&nbsp;Find photos on Flickr <a href="http://www.flickr.com/photos/museumofthemodernsnowglobe/">here</a>.</p>
<p><a href="http://foursquare.com/venue/13708986"><?php echo $this->Html->image('foursquare-icon16x16.png', array('alt' => 'Foursquare', 'style' => 'vertical-align:middle;border:0')); ?></a>&nbsp;Find us on foursquare <a href="http://foursquare.com/venue/13708986">here</a>.</p>
<p><a href="http://feeds.feedburner.com/MuseumOfTheModernSnowglobe" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" style="vertical-align:middle;border:0"/></a>&nbsp;Subscribe to museum news <a href="http://feeds.feedburner.com/MuseumOfTheModernSnowglobe">here</a>.</p>
</div>


<div class="infosection">
<h4>Send Us a Message</h4>
<div id="formcontent">
<div id="sending" style="display:none;"><?php echo $this->Html->image('download.gif'); ?>&nbsp;Sending...</div>

<?php echo $this->Form->create(null, array('url' => array('controller' => 'messages', 'action' => 'send', 'quicknote'), 'id' => 'quicknote')); ?>
<textarea rows="6" cols="46" id="message" name="message"></textarea><br/>
<?php echo $this->Js->submit('Send it', array(
				'url' => array('controller' => 'messages', 'action' => 'send', 'quicknote'), 
				'update' => '#formcontent', 
				'before' => '$("#quicknote").toggle();$("#sending").toggle();'));?>
<?php echo $this->Form->end(); ?>
</div>
</div>

</div>