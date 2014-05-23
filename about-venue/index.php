<?php include("../scripts/dbconnect.php");?> <!-- connect to database-->
<?php include("../snippets/header.php");?><!-- header-->
<title>About Venue | Museao | Event Hosting | Columbia, MO</title> <!--title of page -->
<body id="about_page">
<!--body goes here-->			
			<div id="navbar">
				<div id="logo">
					<a href="../"><img src="../assets/img/logo.png"></a>
				</div>
				<div id="nav_buttons">
					<a href="../about-venue" id="about_button" class="active">
						About Venue
					</a>
					<a href="../preferred-vendors" id="vendor_button">
						Preferred Vendors
					</a>
					<a href="../gallery" id="gallery_button">
						Gallery
					</a>
					<a href="../contact" id="contact_button">
						Contact
					</a>
				</div>
			</div>
			
			
			<div class="mid_section">
				<div class="container">
					<div class="row-fluid">
						<div class="span6">
							<h1>About Venue</h1>
							<p>Museao is the premier special event venue located in the heart of Columbia, MO. Our modern flair and especially unique design sets us apart as an unforgettable destination, sure to awe your guests from the moment they arrive until the get-away car is whisking you away at the end of the evening. Museao provides various spaces able to accommodate all event styles from wedding ceremonies, cocktail hours, receptions, and many other special events. Let us fuel your imagination and bring your vision to life as we fulfill your venue needs!</p>
				
							<p>During the weekdays, Museao serves the dual function of operating as a creative co-working space for startup companies. In 2012, it was decided to open up Museao for hosting outside special events and ever since it has been a wonderful experience sharing our beautiful venue with clients around the area.</p>
							<div class="buttons"><a href="../Catering-Menu.pdf" target="_blank">Catering Menu</a> <a href="../Museao-Square-Footages.pdf" target="_blank">Museao Square Footages</a>
							</div>

						</div>
						<div class="span6">
							<div class="article">
								<div class="row-fluid">
									<div class="span6">
										<div class="image_wrapper">
											<div class="image">
												<img src="../assets/img/Inside Columbia's Weddings Cover.png">
											</div>
										</div>
									</div>
									<div class="span6">
										<h4>Inside Columbia's Weddings Magazine</h4>
										<p>Article on pg. 20</p>
										<a href="http://issuu.com/insidecolumbia/docs/icweddings-2014-digital" target="_blank">View article</a>
									</div>
								</div>
							</div>
							<div class="article">
								<div class="row-fluid">
									<div class="span6">
										<div class="image_wrapper">
											<div class="image">
												<img src="../assets/img/Inside Columbia Cover.png">
											</div>
										</div>
									</div>
									<div class="span6">
										<h4>Inside Columbia Magazine</h4>
										<p>Article on pgs. 148-151</p>
										<a href="http://issuu.com/insidecolumbia/docs/insidecolumbiadec2013" target="_blank">View article</a>
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
					$("#gallery_button").html("<i class='fa fa-picture-o'></i>");
					$("#contact_button").html("<i class='fa fa-envelope'></i>");
					
				}else{
					$("#about_button").html("About Venue");
					$("#vendor_button").html("Preferred Vendors");
					$("#gallery_button").html('Galley');
					$("#contact_button").html('Contact');
				}
			}

</script>

</body>
</html>