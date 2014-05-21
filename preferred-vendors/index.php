<?php include("../scripts/dbconnect.php");?> <!-- connect to database-->
<?php include("../snippets/header.php");?><!-- header-->
<title>Preferred Vendors | Museao | Event Hosting | Columbia, MO</title> <!--title of page -->
<body id="vendors_page">
<!--body goes here-->
			
			<div id="navbar">
				<div id="logo">
					<a href="../"><img src="../assets/img/logo.png"></a>
				</div>
				<div id="nav_buttons">
					<a href="../about-venue" id="about_button">
						About Venue
					</a>
					<a href="../preferred-vendors" id="vendor_button" class="active">
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
						<div class="span8">
							<h1>Preferred Vendors</h1>
							<p>The Upper Crust is the premier catering service of Museao, fulfilling all food and beverage needs for events hosted at the venue. It is our passion to ensure every guest has a wonderful experience and we set out to make that happen by offering full service catering on-site. Click the above icon to view menu pricing and bar packages offered. To best meet the specific needs of your special event, all menus are fully customizable. Have a catering question or want to inquire about items not listed on the menu? Please reach out to us at 573.777.4443
</p>	
							<div class="main_button">
							<a href="../contact" class="main_contact_button">Contact us about hosting your event</a>
							</div>
						</div>
						<div class="span4">
							<div class="image_wrapper">
								<div class="upper_image">
									<a href="http://www.theuppercrust.biz/" target="_blank"><img src="../assets/img/Upper_Crust_Logo_new.png"></a>
								</div>
								
							</div>
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