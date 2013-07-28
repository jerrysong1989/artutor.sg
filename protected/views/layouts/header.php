<div id="fb-root"></div>

<div id="hp-headerbar">
	<div class="login-btn" data-toggle="modal" href="#login-modal">Log In</div>
	<div class="signup-btn" data-toggle="modal" href="#signup-modal">Sign Up</div>
 	<!-- <button class="btn btn-success pull-right" type="button" value="Register" >Register</button> -->
</div>

<div class="clear"></div>

<div id="signup-modal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Sign Up</h3>
	</div>
	<div class="modal-body" style="text-align: center;">
		<a href="#" class="btn btn-large btn-primary " style="width: 90%;">Login Using Facebook</a>
		------------------------------OR------------------------------
		<a href="#" class="btn btn-large " id="createAccount" style="width: 90%;" data-toggle="modal">Create New Account</a><br>
		<div id="hp-signup">
			
			<form class="form-horizontal">
				<input type="text" placeholder="Name">
				<input type="text" placeholder="Email Address">
				<input type="text" placeholder="Password">
				<input type="text" placeholder="Confirm Password">
			</form>
			<label class="checkbox" style="text-align: left;margin-left: 10px; margin-top: -15px; padding-left:10px;">
				<input type="checkbox" value=""> Tell me about Tutor.sg news
			</label>
			<a href="#" class="btn btn-large btn-primary " style="width:90%" data-toggle="modal" href="#accountCreation">Sign Up</a><br>
			<a href="#" class="btn btn-large btn-warning " style="width:90%" data-toggle="modal" href="#accountCreation">Sign Me Up as a tutor</a><br>
		</div>
		<p style="text-align:left;margin-top:20px">By clicking "Sign up with Facebook" you confirm that you accept the <span style="color:#f89928">Terms of Service</span> and <span style="color:#f89928">Privacy Policy</span>.</p>
	</div>
	<div class="modal-footer">
		<p>Already an Artutor member? <span style="color:#f89928">Log in</span></p>
	</div>
</div>

<div id="login-modal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Log In</h3>
	</div>
	<div class="modal-body" style="text-align: center;">
		<a href="#" class="btn btn-large btn-primary" style="width: 90%;">Login Using Facebook</a>
		------------------------------OR------------------------------
		<div id="hp-login">
			<form class="form-horizontal">
				<input type="text" placeholder="Email Address"><br>
				<input type="text" placeholder="Confirm Password" style="margin-bottom:-15px;"><br>
			</form>
			<label class="checkbox" style="text-align: left; margin-bottom:10px !important;float:left;">
				<input type="checkbox" value=""> Remember me
			</label>
			<span class="pull-right" style="color:#f89928; text-decoration:underline;">Forgot password?</span>
			<a href="#" class="btn btn-large btn-primary" style="width:90%" data-toggle="modal" href="#accountCreation">Log In</a><br>
		</div>
	</div>
	<div class="modal-footer">
		<p>Don't have an account? <span style="color:#f89928">Sign up</span></p>
	</div>
</div>


<script>
  $(function() {
    $( "#createAccount" ).click(function(){
      $('#hp-signup').slideDown('slow', function() {
		  // 
	  });
	      $( "#createAccount" ).css( "display", "none");
      return false;
    });
  });

  $('#signup-modal').on('hidden', function () {
	  $( "#hp-signup" ).css( "display", "none");
      $( "#createAccount" ).css( "display", "block");
	})

	
	// for soical plug-ins
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
				


  </script>
