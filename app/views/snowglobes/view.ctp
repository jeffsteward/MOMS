<div class="globemedia">
<ul id="slider">
	<li><?php echo $snowglobeFormatter->renderPrimaryImage(
					$snowglobe, 'large',
					array("title" => $snowglobe['Snowglobe']['Name'], 
					"height"=>"400", "width"=>"400")); ?>
	</li>

	<?php foreach ($snowglobe['Images'] as $image): 
		if ($image['FileName'] != $snowglobe['PrimaryImage']['FileName']) {
			
			switch($image['MediaType']) {
				case 'image':
					echo '<li>'.$html->image("snowglobes/400x400/".$image['FileName'], 
								array("title" => $image['Description'], 
									"height"=>"400", 
									"width"=>"400")).'</li>';
					break;
				case 'video':
					echo '<li><div class="video">'.
						'<object type="application/x-shockwave-flash" width="400" height="300" data="http://www.flickr.com/apps/video/stewart.swf?v=71377" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param name="flashvars" value="'.$image['FileName'].'"></param><param name="movie" value="http://www.flickr.com/apps/video/stewart.swf?v=71377"></param><param name="bgcolor" value="#000000"></param> <param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" src="http://www.flickr.com/apps/video/stewart.swf?v=71377" bgcolor="#000000" allowfullscreen="true" flashvars="'.$image['FileName'].'" height="300" width="400"></embed></object>'.
						'</div></li>';
					break;
			}			
		}
	endforeach ?>

	<?php if ($snowglobe['Snowglobe']['BaseWidth'] <> '')
		echo '<li>'.$snowglobeFormatter->renderScaledImage($snowglobe).'</li>';
	?>

	<?php if ($snowglobe['Snowglobe']['PurchaseLocationID'] > 0.00) { 
		echo '<li>' . $googleStaticMap->map(array(
			'markers'=>array(array($snowglobe['Location']['Latitude'], $snowglobe['Location']['Longitude'])),
			'size'=>array(400,400),
			'zoom'=>2)) . '</li>';
	}?>

	<li>
	<?php echo $googleQRCode->renderQR(
		$html->url(array('controller' => 'snowglobes', 
		'action' => 'view', 
		$snowglobe['Snowglobe']['SnowglobeID']),true),
		400,400);
	?>
	</li>
</ul>
</div>


<div class="globedata">
<table border="0" cellspacing="1" cellpadding="1">
	<tr><td>Name: </td><td><?php echo $snowglobe['Snowglobe']['Name']; ?></td></tr>
	<tr><td>Date: </td><td><?php echo $snowglobe['Snowglobe']['DateAcquired'].' '.$snowglobe['Snowglobe']['Year']; ?></td></tr>
	<tr><td>Donor: </td><td><?php echo $snowglobe['Donor']['DisplayName']; ?></td></tr>
	<tr><td>Location: </td><td><?php echo $snowglobe['Location']['FullLocation']; ?></td></tr>
	<tr><td>Cost: </td><td><?php echo $this->Number->currency($snowglobe['Snowglobe']['Cost'],'USD',array('after'=>false,'zero'=>'')); ?></td></tr>
	<tr><td>Dimensions: </td><td><?php echo $snowglobeFormatter->renderBaseDimensions($snowglobe); ?></td></tr>
	<tr><td>Status: </td><td><?php echo $snowglobe['Snowglobe']['Status']; ?></td></tr>
	<tr><td>Condition: </td><td><?php echo $snowglobe['Snowglobe']['Condition']; ?></td></tr>
	<tr><td>On View: </td><td><?php echo ((bool)$snowglobe['Snowglobe']['OnView']? 'Yes': 'No'); ?></td></tr>
	<tr><td>Staff Pick: </td><td><?php echo ((bool)$snowglobe['Snowglobe']['StaffPick']? 'Yes': 'No'); ?></td></tr>
</table>

<div class="interpretation">
	<?php echo $snowglobeFormatter->renderInterpretation($snowglobe); ?>
	<p><?php echo $html->link('Click to comment or share your '.$snowglobe['Snowglobe']['Name'].' story', array('controller' => 'snowglobes', 'action' => 'story', $snowglobe['Snowglobe']['SnowglobeID'])); ?></p>
	
	<ul style="margin:15px 0px 0px 0px;padding:0px;">
		<li style="list-style-type:none;display:inline;padding-right:5px;float:left;">
			<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $html->url(array("controller"=>"snowglobes", "action"=>"view", $snowglobe["Snowglobe"]["SnowglobeID"]), true);?>" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		</li>
		<li style="list-style-type:none;display:inline;padding-right:5px;">
			<g:plusone size="medium" href="<?php echo $html->url(array("controller"=>"snowglobes", "action"=>"view", $snowglobe["Snowglobe"]["SnowglobeID"]), true);?>"></g:plusone>
		</li>

	</ul>
</div>
</div>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>