<ul>
<li><?php echo $this->Html->link('Collection', '/', array('id' => 'collection_menu'));?></li>
<li><?php echo $this->Html->link('News', array('controller' => 'news', 'action' => 'index'));?></li>
<li><?php echo $this->Html->link('About', array('controller' => 'pages', 'action' => 'display', 'about'));?></li>
<li><?php echo $this->Html->link('Visit', array('controller' => 'pages', 'action' => 'display', 'visit'));?></li>
<li><?php echo $this->Html->link('Contact Us', array('controller' => 'pages', 'action' => 'display', 'contact'));?></li>
</ul>
