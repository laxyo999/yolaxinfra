@extends('layouts.front')
@section('title','Contact Us - Yolax Infranergy')
@section('content')
<style>
.imgcaptcha, .refresh {
    display: inline;
    margin-bottom: 20px;
    margin-right: 39px;
    width: auto;
}
</style>


<!--  Page Title -->
<div id="page-title">

	<!--  Container Start -->
	<div class="container">
		<div class="sixteen columns">
			<h1>Contact</h1>
		</div>
	</div>
	<!--  Container End -->
	
</div>
<!-- Page Title End -->

<!--   Container Start -->
<div class="container">
	<!-- Contact Form -->
	
	<div class="eleven columns">		
	<h4 class="headline">Request For Offer</h4>
		<div class="success-message">
			<div class="notification success closeable">
				<p><span>Success!</span> Your message has been sent.</p>
			</div>
		</div>


		<div id="contact-form">
			<form method="post" action="#null" id="register">
				
				<div class="field">
					<label style="font-size: 14px">Name of Contact Person:<span>*</span></label>
					<input type="text" name="name" id="name" class="text" required/>
				</div>

				<div class="field">
					<label style="font-size: 14px">Company  Name &amp; Location &amp; Address:<span>*</span></label>
					<input type="text" name="company-name" id="company_name" class="text" required="required" />
				</div>
				
				<div class="field">
					<label style="font-size: 14px">Email: <span>*</span></label>
					<input type="text" name="email" id="email" class="text" />
				</div>

				<div class="field">
					<label style="font-size: 14px">Mobile No.: <span>*</span></label>
					<input type="text" name="mobile" id="mobile" class="text" required="required" />
				</div>

				<div class="field">
					<label style="font-size: 14px">Detailed About Plant/Sector: <span>*</span></label>
					<select name="plant" id="plant" required="required">
						<option value="">Select Plant/Sector</option>
						<option value="Railway">Railway</option>
						<option value="Thermal Power Plant">Thermal Power Plant</option>
						<option value="Chemical">Chemical</option>
						<option value="Aluminum">Aluminum</option>
						<option value="Cement">Cement</option>
						<option value="Chlor Alkali">Chlor Alkali</option>
						<option value="Fertilizer">Fertilizer</option>
						<option value="Iron & Steel">Iron &amp; Steel</option>
						<option value="Pulp & Paper">Pulp &amp; Paper</option>
						<option value="Textile">Textile</option>
						<option value="Sugar">Sugar</option>
						<option value="FMCG">FMCG</option>
						<option value="Automobile">Automobile</option>
						<option value="Engineering">Engineering</option>
						<option value="Refineries">Refineries</option>
						<option value="Power distribution Companies">Power distribution Companies</option>
						<option value="Others">Others</option>	
					</select>
				</div>

				<div class="field" style="padding-right: 15px">
					<label style="font-size: 14px">Power Sources: <span>*</span></label>
					<span>
						<label style="display: inline-block;">I. State Electricity Board</label>
						<div class="pull-right">
							<input style="display: inline;" required="required" id="state" type="radio" name="state" value="YES">YES
							<input style="display: inline;" type="radio" name="state" id="state" value="NO">NO
						</div>
					</span><br>
					<span>
						<label style="display: inline-block;">II. Open Access Power</label>
						<div class="pull-right">
							<input style="display: inline;" required="required" id="open_power"  type="radio" name="open_power" value="YES">YES
							<input style="display: inline;" type="radio" id="open_power" name="open_power" value="NO">NO
						</div>
					</span><br>
					<span>
						<label style="display: inline-block;">III. Captive Power Plant &amp; Capacity</label>
						<div class="pull-right">
							<input style="display: inline;" required="required" type="radio" id="captive_power" name="captive_power" value="YES">YES
							<input style="display: inline;" type="radio" name="captive_power" id="captive_power" value="NO">NO
						</div>
					</span>
				</div>
				<div class="field">
					<label>If Yes Than Capacity:<span>*</span></label>
					<input type="text" id="capacity" name="capacity" required="required" class="text" />
				</div>

				<div class="field">
					<label style="font-size: 14px">Average  Power consumption Monthly:<span>*</span></label>
					<input type="text" id="power_consumption" name="power_consumption" class="text" required="required" />
				</div>

				<div class="field">
					<label style="font-size: 14px">Steam Generation Source: <span>*</span></label>
					<select name="steam" id="steam" required="required">
						<option value="">Select Steam Generation Source</option>
						<option value="Coal">Coal</option>
						<option value="Pet Coke">Pet Coke</option>
						<option value="Furnace Oil">Furnace Oil</option>
						<option value="Waste Heat Recovery">Waste Heat Recovery</option>
						<option value="Others">Others</option>
					</select>
				</div>

				<div class="field">
					<label style="font-size: 14px">Steam Consumption per Day:<span>*</span></label>
					<input type="text" name="steam_consumption" id="steam_consumption" class="text" required="required"/>
				</div>

				<div class="field">
					<label style="font-size: 14px">Production Per Day :<span>*</span></label>
					<input type="text" name="production" id="production" class="text" required="required" />
				</div>
				
				<div class="field">
					<label style="font-size: 14px">Write About Your Requirement or Inquiry:</label>
					<textarea name="message" id="message" class="text textarea" ></textarea>
				</div>
				
				<div class="field">
					<label>Captcha</label>
					<input type="text" placeholder="Enter Code" id="captcha" name="captcha" class="inputcaptcha" required="required">
					<img src="demo_captcha.php" class="imgcaptcha" alt="captcha"  />
					<img src="images/refresh.png" alt="reload" class="refresh" style="cursor:pointer" />
				</div>				

				<div class="field">
					<input type="submit" id="send" value="Send Message" class="button medium yellow" style="width:150px; display:inline-block"/>
					<div class="loading"></div>
				</div>
				
			</form>
		</div>
	</div>
	
	<!-- Contact Details -->
	<div class="five columns">
    <h4 class="headline">See Our Location On Map</h4>
    <div id="google-map" class="embed">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14716.334994576137!2d75.9050051861115!3d22.762273059983077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631d5ae9abd47f%3A0x800e5498d0685003!2syolaxinfra+Energy+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1469626096377" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

  <!-- Google Map End -->

		
	<h4 class="headline">Contact Details</h4>
	<ul class="contact-details" style="padding-top: 8px;">
		<li><i class="fa fa-map-marker"></i> <p>II-Floor, Plot No. 2, County Park<br/> MR-5, Mahalaxmi  Nagar,<br/>Indore, MP, India-452010</p></li>
		<li><i class="fa fa-phone"></i> <p>Phone: 0731-4043798 | 0731-4996625</p></li>
		<li><i class="fa fa-envelope"></i><p>Email: <a href="mailto:info@yolaxinfra.com">info[at]yolaxinfra.com</a></p></li>
	</ul>
	</div>


	<!-- Social Media -->
	

	
</div>
<!-- End  Container -->
<script language="javascript">
$(document).ready(function(){

$(".refresh").click(function () {
    $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
    
});
$('#register').submit(function() {
$.post("submit_demo_captcha.php?"+$("#register").serialize(), { }, function(response){
        if(response==1){
           $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
           clear_form();
           alert("Email Send Successfully.");
        }else{
           alert("Not Send");
        }
	});
	return false;
    });

	function clear_form()
     {
        $("#name").val('');
        $("#company_name").val('');
        $("#email").val('');
        $("#mobile").val('');
        $("#plant").val('');
	$("#state").val('');
        $("#open_power").val('');
        $("#captive_power").val('');
	$("#capacity").val('');
	$("#power_consumption").val('');
	$("#steam").val('');
	$("#steam_consumption").val('');
	$("#production").val('');
	$("#message").val('');
	$("#captcha").val('');
     }
});

</script>
@endsection
