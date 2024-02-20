
<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
	<title>Warranty | Cascade Ribbon Microphones</title>
	<meta name="description" content="Register your Cascade Ribbon Microphone to activate your warranty."/>
	
	<?php
		include('header.php'); 
	?>
	<script>
		var page = 'About Us';
	</script>


<div class="container about-us">
	<div class="minMax">
		
		<section id="about-us" class="about-us-section clearfix">

			<article>
				
				<div class="about-us-desc">
					<h1>Warranty Registration</h1>
					<p><br /></p>
					<p>Cascade Microphones would like to take this time to thank you for your recent purchase! Please fill out the form below to register your new microphone.</p>


					<form id="warranty-form" action="//formspree.io/xjlyaybx" method="POST">
						<div class="field clearfix">
							<label for="Full-Name">Full Name</label>
							<input type="text" name="Full Name" id="Full-Name" class="warranty-form-field" placeholder="Enter full name" maxlength="50" required="required" />
						</div>

						<div class="field clearfix">
							<label for="email">Email Address</label>
							<input type="email" name="email" id="email" class="warranty-form-field" placeholder="Enter email address" maxlength="50" required="required" />
						</div>

						<div class="field clearfix">
							<label for="Model">Microphone Model</label>
							<select tabindex="1" class="dropkick-jump" name="Model" id="Model">
							  <option value="Fat Head II">Fat Head II</option>
							  <option value="Fat Head II Stereo Pair">Fat Head II Stereo Pair</option>
							  <option value="Fat Head">Fat Head</option>
							  <option value="Fat Head Stereo Pair">Fat Head Stereo Pair</option>
							  <option value="Fat Head BE">Fat Head BE</option>
							  <option value="Fat Head BE Stereo Pair">Fat Head BE Stereo Pair</option>
							  <option value="Vin-Jet">Vin-Jet</option>
							  <option value="Vin-Jet Stereo Pair">Vin-Jet Stereo Pair</option>
							  <option value="Fat Head II Active/Passive">Fat Head II Active/Passive</option>
							  <option value="X15-Stereo">X15-Stereo</option>
							  <option value="Knuckle Head">Knuckle Head</option>
							</select>
						</div>

						<div class="field clearfix">
							<label for="Serial-Number">Serial Number</label>
							<input type="text" name="Serial-Number" id="Serial-Number" class="warranty-form-field" placeholder="Enter serial number" maxlength="20" required="required"/>
						</div>

						<div class="field clearfix">
							<label for="Dealer">Dealer/Retail Store</label>
							<input type="text" name="Dealer" id="Dealer" class="warranty-form-field" placeholder="Enter dealer/retail store of purchase" maxlength="50" required="required"/>
						</div>

						<div class="field clearfix">
							<label for="Purchase-Date">Date of Purchase</label>
							<input type="date" name="Purchase Date" id="Purchase-Date" class="warranty-form-field" required="required" />
						</div>

						<button id="warranty-form-button" class="primary-btn">Submit</button>
						

					</form>
					<p id="warranty-form-status"></p>




				</div>
				<span id="contact-us"></span>
				<div class="contact-us-desc" >
					<h2>Contact Us</h2>
					<p><br /></p>
					<p><strong>Email</strong><br />
					<a href="mailto:sales@cascademicrophones.com">sales@cascademicrophones.com</a></p>

					<p><strong>Phone</strong><br />
					(360) 867-1799</p>
					<p>Business Hours<br />
					Monday - Friday: 9AM to 4:30 PM-PST</p>
				
					<p><strong>Address</strong><br />
					Cascade Microphones<br />
					630 O'leary St. NW.<br />
					Olympia, WA 98502</p>
				
					
				</div>
			</article>
		</section>


		
				
		
		


	</div>
		
</div>



<script>
  window.addEventListener("DOMContentLoaded", function() {

    // get the form elements defined in your form HTML above
    
    var form = document.getElementById("warranty-form");
    var button = document.getElementById("warranty-form-button");
    var status = document.getElementById("warranty-form-status");

    // Success and Error functions for after the form is submitted
    
    function success() {
      form.reset();
      //button.style = "display: none ";
      $('#warranty-form').animate({opacity:0},500,function() {
      	$(this).remove();
      	status.innerHTML = "<strong>Thank you! Your warranty information has been submitted.</strong>";
      })
      
    }

    function error() {
      status.innerHTML = "Oops! There was a problem.";
    }

    // handle the form submission event

    form.addEventListener("submit", function(ev) {
      ev.preventDefault();
      var data = new FormData(form);
      ajax(form.method, form.action, data, success, error);
    });
  });
  
  // helper function for sending an AJAX request

  function ajax(method, url, data, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.onreadystatechange = function() {
      if (xhr.readyState !== XMLHttpRequest.DONE) return;
      if (xhr.status === 200) {
        success(xhr.response, xhr.responseType);
      } else {
        error(xhr.status, xhr.response, xhr.responseType);
      }
    };
    xhr.send(data);
  }
</script>

<? include('footer.php') ?>