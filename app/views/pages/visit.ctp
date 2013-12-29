<div id="pagecontent">

<h4>Visit</h4>

<div class="infosection">
<p>The Museum of the Modern Snowglobe is located at Vernon Street Studios in Somerville, MA. It is open by appointment only. Please <?php echo $this->Html->link('contact us', '/contact');?> if you wish to visit.</p>
<p>The museum is 100% hands-on.<br/>
Photography is allowed and encouraged.</p>
</div>


<div class="infosection">
<h4>Location</h4>

<p>Vernon Street Studios<br/>
   6 Vernon Street<br/>
   Somerville, MA 02145<br/>
</p>

<p><?php echo $googleStaticMap->map(array(
			'center'=>'6+Vernon+Street,Somerville,MA',
			'markers'=>array('color:blue|6+Vernon+Street,Somerville,MA'),
			'size'=>array(600,340),
			'zoom'=>14));?></p>
</div>


<div class="infosection">
<h4>Plan a visit</h4>

<form id="visitrequest" method="post" action="/messages/send/visitrequest">
<p>
<table>
<tr><td style="width:30%"><label for="name">Name</label></td><td><input type="text" id="name" size="50"/></td></tr>
<tr><td><label for="email">E-mail</label></td><td><input type="text" id="email" size="50"/></td></tr>
<tr><td><label for="visitorcount">Number of visitors</label></td><td><input type="text" id="visitorcount" size="15"/></td></tr>
<tr><td><label for="preferedday">Prefered day and time</label></td><td><select id="preferedday"><option>Saturday</option><option>Sunday</option></select><select id="preferedtime"><option>1:00pm</option><option>1:30pm</option><option>2:00pm</option><option>2:30pm</option><option>3:00pm</option><option>3:30pm</option><option>4:00pm</option></select></td></tr>
<tr><td><label for="comments">Additional information we may need to know for your visit</label></td><td><textarea id="comments" cols="40" rows="4"></textarea></td></tr>
<tr><td></td><td></td></tr>
</table>
</p>
<p><input type="button" value="Send It" onclick="$('#visitrequest').submit();"/></p>
</form>
</div>


<div class="infosection">
<h4>Take a virtual tour</h4>
<p><?php echo $flash->renderSwf('swf/tour.swf',600,340);?></p>
</div>

</div>