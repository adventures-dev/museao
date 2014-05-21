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
						
								<form id="contact_form" action="" method="POST">
									<h1>Contact us</h1>
									<p>Let us know your event details for free quote & venue tour.</p>
				
									<label>Name:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>
										<input class="input-block-level" id="contact_name" type="text" name="name" placeholder="John Smith">
									</div>								
									<label>Email Address:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_email" type="text" name="email" placeholder="sample@email.com">	
									</div>
									<label>Phone Number:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_phone" type="text" name="phone" placeholder="(555)555-5555">	
									</div>
									<label>Event Type:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_event_type" type="text" name="event_type" placeholder="Type of event">	
									</div>
									<label>Guest Count:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_guest_count" type="text" name="guest_count" placeholder="Number of guests">	
									</div>
									
									<label>Event Date:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_date" type="date" name="date">	
									</div>
									<label>Times:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_time" type="text" name="time" placeholder="Time of event">	
									</div>
									<label>Catered? (+details):</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<textarea id="contact_catered" name="catered" class="input-block-level" placeholder=""></textarea>	
									</div>
									
									
									<label>Notes:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<textarea id="contact_notes" name="notes" class="input-block-level" placeholder="Tell us about your event (e.g., date, times, guest count)."></textarea>	
									</div>
						
									<button>Contact</button>
									<div class="error" id="contact_error"></div>								
								</form>
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

$("#contact_form").validate({

    rules: {
        name: {
            required: true,

		},
        email: {
            required: true,
            email: true,
        },
        event_type: {
            required: true,

        },
        guest_count: {
            required: true,

        },
        catered: {
            required: true,

        },
    },
	success: function(label, element){
		$(element).removeClass("form_error").siblings(".validation").show().removeClass("error").html("<i class='fa fa-check'></i>");
		
	},    
	highlight: function(element, errorClass) {
	    $(element).addClass("form_error");	
		$(element).siblings(".validation").show().addClass("error").html("<i class='fa fa-exclamation-triangle'></i>");
	},
    submitHandler: function (form) {
        $("#contact_error").show().html('<i class="fa fa-spinner fa-spin"></i>');
        
        var contact_name = $('#contact_name').val();
        var contact_email = $('#contact_email').val();
        var contact_phone = $('#contact_phone').val();
        var contact_event_type = $('#contact_event_type').val();
        var contact_guest_count = $('#contact_guest_count').val();
        var contact_time = $('#contact_time').val();
        var contact_date = $('#contact_date').val();
        var contact_catered = $('#contact_catered').val();
        var contact_notes = $('#contact_notes').val();


        var data = {
            name: contact_name,
            email: contact_email,
            phone: contact_phone,
            event_type: contact_event_type,
            guest_count: contact_guest_count,
            time: contact_time,
            date: contact_date,
            catered: contact_catered,
            notes: contact_notes,
            
            
        }; 

        $.ajax({
            type: "POST",
            url: "mail.php",
            data: data,
            success: function (res) {
            
				$("#contact_error").html("");
				            	
            	 if (res == true) {
            	 		$("#register_form input").each(function(){
	            	 		$(this).val("");
            	 		});
				 		$(".validation").each(function(){
	            	 		$(this).hide();
            	 		});            	 		
            	 		
				 		window.location = "../thank-you";
                   		
                 }else{
                     $("#contact_error").html(res).hide().fadeIn().delay(2000).fadeOut();
                 }
            }
        });
    }
});
	


</script>

</body>
</html>