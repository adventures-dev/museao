<?php include("../scripts/dbconnect.php");?> <!-- connect to database-->
<?php include("../snippets/header.php");?><!-- header-->
<title>Thank you for contacting us! | Museao | Event Hosting | Columbia, MO</title> <!--title of page -->
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
					<a href="../contact" id="contact_button">
						Contact
					</a>
				</div>
			</div>
			<div class="mid_section">
				<div class="container">
					<div class="row-fluid">
						<div class="span6 offset3">
						
									<h1>Thank you for contacting us!</h1>
									<p>Thank you for your message.  We will get back to you soon!</p>
				
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