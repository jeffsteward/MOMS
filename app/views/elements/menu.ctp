<div id="menu">
<ul>
<li><?php echo $this->Html->link('Collection', '/collection', array('id' => 'collection_menu'));?>
	
	<div class="tooltip">
	<ul>
		<li><?php echo $this->Html->link('Map View', array('controller' => 'pages', 'action' => 'display', 'map'));?></li>
		<li><?php echo $this->Html->link('Staff Favorites', array('controller' => 'snowglobes', 'action' => 'favorites'));?></li>
		<li><?php echo $this->Html->link('Currently On View', array('controller' => 'snowglobes', 'action' => 'onView'));?></li>
		<li><?php echo $this->Html->link('Recent Acquisitions', array('controller' => 'snowglobes', 'action' => 'recentAcquisitions'));?></li>		
	</ul>
	</div>

</li>
<li><?php echo $this->Html->link('News', array('controller' => 'news', 'action' => 'index'));?></li>
<li><?php echo $this->Html->link('About', array('controller' => 'pages', 'action' => 'display', 'about'));?></li>
<li><?php echo $this->Html->link('Visit', array('controller' => 'pages', 'action' => 'display', 'visit'));?></li>
<li><?php echo $this->Html->link('Contact Us', array('controller' => 'pages', 'action' => 'display', 'contact'));?></li>
</ul>
</div>