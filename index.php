<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Museao | Event Hosting | Columbia, MO</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />        
		<meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="With 30 ft. ceilings and 10,000 sq. ft. of glass, steel, and concrete, let this award winning building be the venue for your next event." />
		<meta name="robots" content="noodp, noydir" />
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Mr+De+Haviland' rel='stylesheet' type='text/css'>
        <!-- Le styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
		
		
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-20164022-4']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

		
    </head>
    
    <body>
		<div id="landing_page">
			
			<div id="navbar">
				<div id="logo">
					<a href=""><img src="assets/img/logo.png"></a>
				</div>
				<div id="nav_buttons">
					<a href="about-venue" id="about_button">
						About Venue
					</a>
					<a href="preferred-vendors" id="vendor_button">
						Preferred Vendors
					</a>
					<a href="contact" id="contact_button">
						Contact
					</a>
				</div>
			</div>
			
			<div id="mid_section">
				<h1>Where <span>Beauty</span> Meets Functionality</h1>
				<h2>Modern Event Venue</h2>
				<a id="call_to_action" href="contact">Contact us</a>
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

		</div>
        
        
	    <!-- Le scripts -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/placeholder-fix.js"></script>

        <!-- custom scripts -->            
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
        
        </script><!-- end of custom scripts -->
                
    </body>
</html>