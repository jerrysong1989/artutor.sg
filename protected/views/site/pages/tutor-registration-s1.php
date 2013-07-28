


<div id="leftheavy-top">
	<div class="divider-orange"></div>
</div>

<div id="leftheavy-mid" class="row">

	<div class="span8">

		<div class="page-heading">			
			TUTOR REGISTRATION
		</div>

		<div class="progress">
		  <div class="bar bar-warning progress-striped active text-center" style="width: 33%;">STEP 1: PERSONAL PARTICULARS</div>
		</div>

		<form class="form-horizontal" action='' method='post' accept-charset='UTF-8' enctype="multipart/form-data">

			<div class="well">
				<blockquote><p>Basic Info *</p></blockquote> 
				<input class="input-medium" name="applicantName" type="text" placeholder="name" value='<?php  echo @$_POST["applicantName"]; ?>'/> 
				<select id="applicantGender" class="selectpicker" data-width="auto" name="applicantGender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>


				<span class="input-append date" id="applicantDOB" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
					<input class="span2" name="childeBirthDate" size="16" type="text" placeholder="birthday" value='<?php  echo @$_POST["childeBirthDate"]; ?>' readonly="">
					<span class="add-on"><i class="icon-calendar"></i></span>
				</span>
			    <input class="input-medium" name="applicantNRIC" type="text" placeholder="NRIC/Passport Number" value='<?php  echo @$_POST["applicantNRIC"]; ?>'/> 
				<select id="applicantRace" class="selectpicker" data-width="auto" name="applicantRace">
					<option value="Chinese">Chinese</option>
					<option value="Malay">Malay</option>
					<option value="Indian">Indian</option>
					<option value="Others">Others</option>
				</select>
			</div>


			<div class="well">
				<blockquote><p>Contact Details *</p></blockquote> 
				<div class="form-inline">
					Home phone:<input class="input-medium" name="applicantHomePhone" type="text" placeholder="home phone" value='<?php  echo @$_POST["applicantHomePhone"]; ?>'/> 
					Email address:<input class="input-medium" name="applicantEmailAddress" type="text" placeholder="email address" value='<?php  echo @$_POST["applicantEmailAddress"]; ?>'/> 
				</div>
			</div>

			<div class="well">
				<blockquote>About Myself</blockquote>

				<label for="textarea1">Experience / About Me</label>
				<textarea name="textarea1"  rows="4" style="width:95%" ><?php  echo @$_POST["textarea1"]; ?></textarea><br>
				<small>You are encouraged to write a short description of yourself, teaching experience and teaching method in the manner in which you wish to present yourself to the parents visiting this site. You can always log in to edit this.</small>
			</div>	

			<div class="well" style="height:240px;">
				<blockquote><p>Profile Picture *</p></blockquote> 
				<div id="leftheavy-applicantphoto" class="fileupload fileupload-new" data-provides="fileupload">
					<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>

					<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
					<span class="btn btn-file">
						<span class="fileupload-new">Select image</span>
						<span class="fileupload-exists">Change</span>
						<input type="file" name="file" id="file"/>
					</span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

				<div id="leftheavy-applicantphoto-description">
					(Recommended size is 90x110 pixels)
					<br><br>
					A friendly photo closes the gap between the client and you. 
					This increases the chance of you being shortlisted when it comes 
					to a one to one comparison in the tutor list. 
					This can be uploaded now or later when you log into your account.
				</div>
			</div>

			<a href="page?view=tutor-registration-s2" class="btn btn-warning pull-right" type="button">Next Step</a>
		</form>
	</div>


	<div class="span3" style="width:240px;">
		<div class="alert alert-block" style="margin-top:40px;" data-spy="scroll" data-target=".navbar">
		  <h4>Acknowledgement, Acceptance and Indemnification</h4><br>
		  <p>I, the undersigned Parent or Legal Guardian, request the enrolment of my Child/Ward.  I certify that all particulars furnished in this application and any accompanying documentation subsequently submitted to the School are true, accurate, complete, original and authentic.  I further understand that I will be required to read, understand and sign a copy of the Student Contract upon acceptance.  I will also be given an e-copy of the Parent Handbook, which will provide me with further information about the School.
		  </p>	
		  <br>
		  <div class="control-group ">
		    <div class="controls" style="width:400px;margin:0 auto !important">
			  	<input type="radio" name="readTerms" id="readTerms" value="read"<? if(@$_POST['readTerms'] == 'read')echo 'checked="true"'; ?>>I have read and understood the above document. 
			</div>	
		  </div>		  		
		</div>	
  	</div>

</div>


<script>
	$(function(){
		$('#applicantDOB').datepicker();
		$('.fileupload').fileupload()


        $('.selectpicker').selectpicker({
            'selectedText': 'cat'
        });

    // $('.selectpicker').selectpicker('hide');

		}); //call datepicker
</script>
