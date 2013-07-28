

<div id="leftheavy-top">
	<div class="divider-orange"></div>
</div>

<div id="leftheavy-mid" class="row">

	<div class="span8">

		<div class="page-heading">			
			TUTOR REGISTRATION
		</div>

		<div class="progress">
			<div class="bar bar-warning " style="width: 33%;"></div>
			<div class="bar bar-success progress-striped active text-center" style="width: 33%;">STEP 2: Professional Experience</div>
		</div>

		<form class="form-horizontal" action='' method='post' accept-charset='UTF-8' enctype="multipart/form-data">
			<div id="leftheavy-tutor-page2">

			<div class="well">
				<blockquote>Educational Backgrounds</blockquote>

				<label for="textarea1">Currently pursuing / Most recent Qualification</label>
				<textarea name="textarea1"  rows="4" style="width:95%" ><?php  echo @$_POST["textarea1"]; ?></textarea><br>
				<small>E.g: NUS, Bachelor of Arts majoring in Psychology or NTU, Bachelor in Business.</small>
				<br><br>
				<button class="btn btn-default btn-warning btn-small" type="button">Add another... </button>
			</div>	

			<div class="well">
				<blockquote>Professional Experience</blockquote>


				<ul class="nav nav-tabs" id="myTab">
				  <li><a href="#certificate active" data-toggle="tab">Certificates</a></li>
				  <li><a href="#portfolio" data-toggle="tab">Portfolio</a></li>
				  <li><a href="#others" data-toggle="tab">Others</a></li>
				</ul>

				<div class="tab-content">
				  <div class="tab-pane active" id="certificate">b</div>
				  <div class="tab-pane" id="portfolio">c</div>
				  <div class="tab-pane" id="others">d</div>
				</div>


				<!-- <label for="textarea1">Currently pursuing / Most recent Qualification</label>
				<textarea name="textarea1"  rows="4" style="width:95%" ><?php  echo @$_POST["textarea1"]; ?></textarea><br>
				<small>E.g:NUS, Bachelor of Arts majoring in Psychology or NTU, Bachelor in Business.</small>
			 -->
			</div>	

				<botton class="btn btn-warning pull-right" type="button">Submit</button>
			</div>
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

