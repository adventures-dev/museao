<?php include("../scripts/dbconnect.php");?> <!-- connect to database-->
<?php include("../snippets/header.php");?><!-- header-->
<title>Contact | Museao | Event Hosting | Columbia, MO</title> <!--title of page -->
<body id="contact_page">
<!--body goes here-->
			
			<div id="navbar">
				<div id="logo">
					<a href="../"><img src="../assets/img/logo.png"></a>
				</div>
				<div id="nav_buttons">
					<a href="../about-venue" id="about_button">
						About Venue
					</a>
					<a href="../preferred-vendors" id="vendor_button">
						Preferred Vendors
					</a>
					<a href="../contact" id="contact_button" class="active">
						Contact
					</a>
				</div>
			</div>
			<div class="mid_section">
				<div class="container">
					<div class="row-fluid">
						<div class="span6 offset3">
							<div id="form_wrapper" class="contact_us">
								<h1>Contact us</h1>
								<form id="contact_form" action="" method="POST">
									<p id="contact-leading">Email us about your event and to schedule a tour.</p>
				
									<div class="field">
										<label>Name:</label>
										<input id="name" name="name" type="text" class="input-block-level" placeholder="Katie Smith">
									</div>
									<div class="field">
										<label>Email:</label>
										<input id="email" name="email" type="email" class="input-block-level" placeholder="sample@email.com">
									</div>
									
									<div class="field">
										<label>Interested In:</label>
										<select id="interest" name="interest">
											<option selected="selected">Special Event</option>
				 							<option >Conference Room/Meeting</option>
											<option>Other</option>
										</select>
									</div>
									<div class="field">
										<label>Message:</label>
										<textarea id="message" name="message" class="input-block-level" placeholder="Tell us about your event (e.g., date, times, guest count)."></textarea>
									</div>
									<div class="field">
										<button class="contact_button">Contact</button>
									</div>
									<div id="error"></div>
								</form>
				
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="landing_footer">
				<div id="text_section">
					<a href="mailto:museaoevents@gmail.com"><li>museaoevents@gmail.com</li></a>
					<li>573.445.0678</li>
					
				</div>
				<div id="social_section">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</div>
			</div>


<!-- end of body -->

<?php include("../snippets/javascripts.php");?> <!--global javascripts -->
<!--any other custom scripts here-->
<script type="text/javascript">
  	$(document).ready(function(){
				responsive();
			});
			
			$(window).resize(function(){
				responsive();
			})
			
			function responsive(){
				var w = $(window).width();
				if(w <= 767){
					$("#about_button").html("About");
					$("#vendor_button").html("Vendors");
					$("#contact_button").html("<i class='fa fa-envelope'></i>");
					
				}else{
					$("#about_button").html("About Venue");
					$("#vendor_button").html("Preferred Vendors");
					$("#contact_button").html('Contact');
				}
			}

</script>

</body>
</html>