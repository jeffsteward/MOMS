<div id="pagecontent">

<h4>Visit</h4>

<div class="infosection">
<p>The museum is open by appointment only. Please <?php echo $this->Html->link('contact us', '/contact');?> if you wish to schedule a time to visit.</p>
</div>

<div class="infosection">
<h4>Location</h4>

<p>Vernon Street Studios<br/>
   <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&q=6+Vernon+St,+Somerville,+MA+02145&ie=UTF8&z=16">6 Vernon Street</a><br/>
   Somerville, MA 02145<br/>
</p>

<p><?php echo $googleStaticMap->map(array(
			'linkurl'=>'http://maps.google.com/maps?f=q&source=s_q&hl=en&q=6+Vernon+St,+Somerville,+MA+02145&ie=UTF8&z=16',
			'center'=>'6+Vernon+Street,Somerville,MA+02145',
			'markers'=>array('color:blue|6+Vernon+Street,+Somerville,+MA+02145'),
			'size'=>array(290,200),
			'zoom'=>14));?></p>
</div>

<div class="infosection">
<h4>Visitor Policies</h4>

<p>The museum is 100% hands-on.<br/>
Photography and video recording is allowed and encouraged.</p>
</div>

</div>