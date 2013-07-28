<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<<<<<<< HEAD
<h1>Coming Soon...</h1>
=======
<div id="hp-top">

	<div id="hp-title">
		<p>Artutor</p>
	</div>

	<div id="hp-tagline">
		<p>Your private way to master</p>
	</div>

	<div id="hp-topicon-wrapper">
		<a href="#" target="_self" class="hp-topicon"><div id="hp-topicon-instrument"></div><div class="hp-topicon-title">INSTRUMENT</div></a>
		<a href="#" target="_self" class="hp-topicon"><div id="hp-topicon-voice"></div><div class="hp-topicon-title">VOICE</div></a>
		<a href="#" target="_self" class="hp-topicon"><div id="hp-topicon-dancing"></div><div class="hp-topicon-title">DANCING</div></a>
		<a href="#" target="_self" class="hp-topicon"><div id="hp-topicon-others"></div><div class="hp-topicon-title">OTHERS</div></a>
	</div>


	<div id="hp-searchbar">
		<form class="form-inline" style="margin:0px;">
		  <div class="btn-group" id="hp-searchbar-subject">
		  	<button class="btn dropdown-toggle" data-toggle="dropdown">
		  		Choose Subject
		  		<span class="caret"></span>
		  	</button>
		  	<ul class="dropdown-menu" style="text-align:left;">
		  		<li><a href="#">Instrument</a></li>
		  		<li><a href="#">Voice</a></li>
		  		<li><a href="#">Dancing</a></li>
		  		<li><a href="#">Others</a></li>
		  	</ul>
		  </div>
		  <input type="text" class="input-small" placeholder="Level">

		  <div class="btn-group">
		  	<button class="btn dropdown-toggle" data-toggle="dropdown">
		  		Gendere Pref
		  		<span class="caret"></span>
		  	</button>
		  	<ul class="dropdown-menu" style="text-align:left;">
		  		<li><a href="#">Male</a></li>
		  		<li><a href="#">Female</a></li>
		  		<li><a href="#">No preference</a></li>
		  	</ul>
		  </div>
			  <input type="text" class="input-medium" placeholder="Location" data-provide="typeahead">
		  <span class="title" style="margin:0 20px 0 10px; color:white;">OR</span>
		  <input type="text"  placeholder="Tutor Name, Id...">
		  <button type="submit" class="btn btn-warning"><i class="icon-search icon-white" style="margin-right:5px;"></i>Search</button>
		</form>
	</div>

	<div class="clear"></div>

	<div id="hp-topselectband-wrapper">
		<div class="hp-topselectband-item">
			<div class="hp-topselectband-toptext">Have a name in mind?
			</div>
			<a class="btn hp-topselectband-btn" id="hp-topselectband-btn-search" type="button">Search for a tutor</a>
		</div>	
		<div class="hp-topselectband-item">
			<div class="hp-topselectband-toptext">Have a skill to share?
			</div>
			<div class="btn-group">
				<a href="site/page?view=tutor-registration-s1" class="btn hp-topselectband-btn" id="hp-topselectband-btn-search-become" type="button">Become a tutor</a>
				<a class="btn btn-warning hp-topselectband-btn-free" type="button">FREE</a>
			</div>

		</div>	
		<div class="hp-topselectband-item">
			<div class="hp-topselectband-toptext">Didn't find what you want?
			</div>
			<a class="btn hp-topselectband-btn" id="hp-topselectband-btn-search-post" type="button">Post a request</a>
		</div>	
	</div>


</div>


<div class="divider-orange"></div>


<div id="hp-mid">
	<div id="hp-feature">
		<div class="hp-feature-firstline">
			<div class="title-hp" style="float:left;">Features</div>
			<div id="hp-feature-firstline-social">
				<div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
				<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
			</div>
		</div>
		<div class="clear"></div>
		<div id="hp-feature-top-box-wrapper">
			<div id="hp-feature-top-box"></div>
			<div id="hp-feature-top-box"></div>
		</div>
		<div id="hp-feature-btm">
		</div>
		<div id="hp-feature-btm-textbox">
			<div id="hp-feature-btm-text">
				SHOP ONLINE NOW AND GET 15% OFF YOUR FIRST ORDER<br><span>SHOP NOW ></span>
			</div>
		</div>
	</div>		

	<div id="hp-latestrequest">
		<div class="hp-feature-firstline">
			<div class="title-hp" style="float:left;">Latest Request</div>
			<span class="badge badge-warning pull-right" id="hp-feature-firstline-badge" >123</span>
		</div>
		<div class="clear"></div><hr id="hp-latestrequest-hr">
		<div class="clear"></div>
		<div id="hp-latestrequest-wrapper">
		</div>
	</div>
</div>

<script>

		// register modal manipulation: when press login the form will auto pop up
		$( "#createAccount" ).click(function(){
			$('#hp-signup').slideDown('slow', function() {});
			$( "#createAccount" ).css( "display", "none");
		});

		$('#signup-modal').on('hidden', function () {
			$( "#hp-signup" ).css( "display", "none");
			$( "#createAccount" ).css( "display", "block");
		});



		// when press a top-icon it will get rest to disappear
		$( ".hp-topicon").click(function(){
			// $('#hp-topicon-instrument').css( "display", "none");
			// $('#hp-topicon-dancing').css( "display", "none");
			// $('#hp-topicon-others').css( "display", "none");
			$('#hp-topicon-wrapper>a').not("#this.id").css( "opacity", "0.2");
			$(this).css( "opacity", "1");
			$(this).animate({left:'',top:'-60px'}, 700, function() {
			    // Animation complete.
    			$('#hp-searchbar').fadeIn('slow', function() {});
    			$('#hp-topselectband-wrapper').css( "display", "none");
			  });

		});


		// the action for the 3 bottons at the btm band
		$( "#hp-topselectband-btn-search").click(function(){
			$('#hp-searchbar').fadeIn('slow', function() {});
			$('#hp-searchbar-subject').css( "display", "inline");
			$( ".hp-topicon").css( "opacity", "0.2");
		});
	</script>
>>>>>>> 0d0ebe10443fb29c4c2ba365a8d36399c9836a0b
