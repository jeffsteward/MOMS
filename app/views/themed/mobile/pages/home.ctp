<div style="background-color:#FFFACD;padding:0 5px 5px 10px;border:1px solid #c0c0c0;border-radius:5px;-webkit-box-shadow:3px 3px black;box-shadow: 3px 3px black;margin-bottom:30px;">
	<h4>The museum is currently closed.</h4>
</div>

<ul data-role="listview">
	<li><?php echo $this->Html->link('Contact Us', array('controller' => 'pages', 'action' => 'display', 'contact'));?></li>
	<li><?php echo $this->Html->link('Visit', array('controller' => 'pages', 'action' => 'display', 'visit'));?></li>
	<li><?php echo $this->Html->link('About', array('controller' => 'pages', 'action' => 'display', 'about'));?></li>
	<li><?php echo $this->Html->link('News', array('controller' => 'news', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('The Collection', '/collection');?></li>
</ul>

<div>
	<p>&nbsp;</p>
</div>