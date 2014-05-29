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
					<a href="../about-venue" id="about_button" class="active">
						About Venue
					</a>
					<a href="../gallery" id="gallery_button">
						Gallery
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
							<div id="thankyou">
									<h1>Thank you for submitting your inquiry!</h1>
									<p>We will be in contact with you soon in regards to hosting your event with Museao.</p>
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
					<li><a href="https://www.facebook.com/pages/Museao/209489849091624" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/Museao" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://www.pinterest.com/museao/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="http://instagram.com/museao" target="_blank"><i class="fa fa-instagram"></i></a></li>
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
					$("#gallery_button").html("<i class='fa fa-picture-o'></i>");
					$("#contact_button").html("<i class='fa fa-envelope'></i>");
					
				}else{
					$("#about_button").html("About Venue");
					$("#vendor_button").html("Preferred Vendors");
					$("#gallery_button").html('Gallery');
					$("#contact_button").html('Contact');
				}
			}




</script>

</body>
</html>