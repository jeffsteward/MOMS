<?php
	$this->set('documentData', '');
	$this->set('channelData', array(
		'title' => __("Museum of the Modern Snowglobe News", true),
		'link' => $this->Html->url('/', true),
		'description' => __("All News", true),
		'language' => 'en-us'));
		
	 foreach ($news as $newsitem) {
	 
	 	$link = array(
	 		'controller' => 'news',
	 		'action' => 'view',
	 		$newsitem['News']['NewsID']);
	 
	 	echo $this->Rss->item(array(), array(
	 		'title' => $newsitem['News']['Title'],
	 		'link' => $link,
	 		'guid' => array('url' => $link, 'isPermaLink' => 'true'),
	 		'description' => $newsitem['News']['Content'],
	 		'pubDate' => $newsitem['News']['NewsDate']));
	 
	 }
?>