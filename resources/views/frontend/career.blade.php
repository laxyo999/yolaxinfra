@extends('layouts.front')
@section('title','Career - Career Opportunities')
@section('content')

<!--  Page Title -->
<div id="page-title">

	<!--  Container Start -->
	<div class="container">
		<div class="sixteen columns">
			<h2>Career in Yolaxinfra</h2>
		</div>
	</div>
	<!--  Container End -->
	
</div>
<!-- Page Title End -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--  Container -->
<div class="container">

	<!-- Standard Structure -->
	<div class="twelve columns">
    <div class="sixteen colomns page-image">
        <img src="http://www.yolaxinfra.com/devsite/images/career.jpg">  
    </div>
    <div class="new-post">
    	<h4 class="headline">Career Opportunities</h4>
    	<p>We exist because of our people. We respect and nurture people for their growth. We are equal opportunity employer. We are committed to become an employer who value innovative people therefore, we are one of the fastest growing consulting firm.</p>
    	<p></p>
    	<h5>We have the opportunities in the following areas,</h5>
    	<p></p>
		<ul class="arrow_list">
            <li>Certified and accredited Energy auditor<a  href="#" class="button small green pull-right"><i class=" icon-pencil icon-white"></i>Apply</a></li>
            <p></p>
            <li>Open access professionals<a  href="#" class="button small green pull-right"><i class=" icon-pencil icon-white"></i>Apply</a></li>
            <p></p>
            <li>Solar energy professionals<a  href="#" class="button small green pull-right"><i class=" icon-pencil icon-white"></i>Apply</a></li>
            
        </ul>
    </div>
		
		<h4 class="headline">Quick Application</h4>
		<div class="success-message">
			<div class="notification success closeable">
				<p><span>Success!</span> Your message has been sent.</p>
			</div>
		</div>

<!-- Code for form submission -->
<!-- Code for form submission -->

		<div id="contact-form">
			<form id="careerform" action="" method="post" enctype="multipart/form-data">
				
				<div class="field">
					<label>Full Name:</label>
					<input type="text" name="fullname" class="text" required />
				</div>
				
				<div class="field">
					<label>Email: <span>*</span></label>
					<input type="text" name="email" class="text" required />
				</div>

				<div class="field">
					<label>Phone: <span>*</span></label>
					<input type="text" name="phone" class="text" required />
				</div>

				<div class="field">
					<label>Choose Profile: <span>*</span></label>
					<select name="select_profile" required>
						<option>Select option</option>
						<option>Certified and accredited Energy auditor</option>
						<option>Open access professionals</option>
						<option>Solar energy professionals</option>
					</select>
				</div>

				<div class="field">
					<label>Upload resume: <span>*</span></label>
					<input type="file" name="file" class="text" required />
				</div>
				<!---  Alert sucess-->
				<div class="alert alert-success" id="career1"> 
						    <button type="button" class="close" data-dismiss="alert">x</button>
						    <strong>Success! </strong>Your form has been Submitted Successfully.
				</div>
                <!---  Alert sucess-->
				<p></p><p></p>
				<div class="field">
					<input class="button medium yellow" type="submit" id="send" name="career_submit" value="Submit" style="width: 20%; margin: auto;" />
					<div class="loading"></div>
				</div>
<div>
				
				 <b> NOTE : Physical presence with original documents is mandatory at Indore office , during the recruitment process.
Telephonic conversation will not be considered for final selection. </b>
			    </div>
			</form>
		</div>
	</div>
	   
	
	<!-- Sidebar Start -->	
	<div class="four columns">
		
		@include('partials.sidebar')
		
		<!-- Large Notice Image -->
		 
<!-- Sidebar end -->	
</div>
<!--  Container End -->

</div>
<!-- End  Container -->

  <script>
      $(function () {

        $('#careerform').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'career-email.php',
            data: $( this ).serialize(),
            mimeType:"multipart/form-data",
            success: function (data) {
            //setTimeout(function() { $("#career1").show().fadeOut(10000); }, 500);
            $("#careerform")[0].reset();
            console.log(data);
            }
          });

        });

      });
    </script>

@endsection
