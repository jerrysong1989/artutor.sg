<div class="divider-orange"></div>

<div id="footer-menu">
	<div id="footer-menu-title">
			<?php echo CHtml::link('ARTUTOR.SG',array('site/')); ?>
	</div>	
	<div id="footer-menu-email">Register your email for news and special offers: 
		<input class="span3" type="text" placeholder="Enter your email...">
	</div>	
	<div class="clear"></div>
	
	<div id="footer-menu-all">
		<div class="footer-menu-oneblock">
			<div class="title">Catalogue</div>
			Instrument<br>
			Vocal Training<br>
			Dance<br>
			Others<br>
		</div>
		<div class="footer-menu-oneblock">
			<div class="title">Service</div>
			Find a tutor<br>
			Search for a tutor<br>
			<?php echo CHtml::link('Become a tutor',array('site/page?view=tutor-registration-s1')); ?><br>
			Post a request<br>
		</div>
		<div class="footer-menu-oneblock">
			<div class="title">About</div>
			<?php echo CHtml::link('About ISHU',array('site/page?view=about')); ?><br>
			About artutor.sg<br>
			Partnership<br>
		</div>
		<div class="footer-menu-oneblock">
			<div class="title">Media</div>
			Media Coverage<br>
			News<br><br>
			<div class="title">Sitemap</div>
			<div class="title">FAQ</div>
		</div>
		<div class="footer-menu-oneblock">
			<div class="title">CONTACT DETAILS</div>
			Tel: (65) 6666 6666<br>
			Fax: (65) 6666 6666<br>
			Email: enquiry@artutor.sg<br>
		</div>							
	</div>	
</div>	


<div id="footer-btm">
	<div id="footer-btm-left">@2013  ISHU Ptd Ltd. All rights reseved</div>
	<div id="footer-btm-mid">Terms of Use  |  Privacy Policy  |  Site Map  |  FAQ</div>
	<div id="footer-btm-right">Follow us on:
		<div class="footer-social" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/_public/images/social/linkedin.png);"></div>
		<div class="footer-social" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/_public/images/social/googleplus.png);"></div>
		<div class="footer-social" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/_public/images/social/twitter.png);"></div>
		<div class="footer-social" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/_public/images/social/facebook.png);"></div>
	</div>
</div>	