<?php include("../scripts/dbconnect.php");?> <!-- connect to database-->
<?php include("../snippets/header.php");?><!-- header-->

<title>Gallery | Museao | Event Hosting | Columbia, MO</title> <!--title of page -->
<body id="gallery_page">
<!--body goes here-->
			
			<div id="navbar">
				<div id="logo">
					<a href="../"><img src="../assets/img/logo.png"></a>
				</div>
				<div id="nav_buttons">
					<a href="../about-venue" id="about_button">
						About Venue
					</a>
					<a href="../gallery" id="gallery_button" class="active"> 
						Gallery
					</a>
					<a href="../preferred-vendors" id="vendor_button" >
						Preferred Vendors
					</a>
					
					<a href="../contact" id="contact_button">
						Contact
					</a>
				</div>
			</div>
			<div class="mid_section">
				<div class="container">
					<div id="gallery">
						<?php
						$dirname = "../assets/img/gallery/";
						$dirname_large = "../assets/img/gallery_large/";
						
						$images = scandir($dirname);
						shuffle($images);
						$ignore = Array(".", "..");
						foreach($images as $curimg){
						if(!in_array($curimg, $ignore)) {
						echo "<li><a href='".$dirname_large.$curimg."' class='fancybox' rel='group'><img src='".$dirname.$curimg."' alt='' /></a></li>";
						}
						} 				
						?>
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

<!-- Add fancyBox -->
<link rel="stylesheet" href="../assets/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="../assets/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="../assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="../assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="../assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script src="jquery.collagePlus.min.js" type="text/javascript"></script>
<script type="text/javascript">
  	$(document).ready(function(){
				responsive();
			});
		
			
			$(window).resize(function(){
				responsive();
			});
			 $(window).load(function () {
				 $('#gallery').collagePlus(
				 	        {'allowPartialLastRow' : true}

				 );
				 $(".fancybox").fancybox();
			});

			
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