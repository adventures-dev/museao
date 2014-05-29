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
					<a href="../gallery" id="gallery_button">
						Gallery
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
									<h3>Let us know your event details for a free quote & venue tour!</h3>
				
									<label>Name:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>
										<input class="input-block-level" id="contact_name" type="text" name="name" placeholder="Katie Smith">
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
										<input class="input-block-level" id="contact_event_type" type="text" name="event_type">	
									</div>
									<label>Guest Count:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_guest_count" type="text" name="guest_count">	
									</div>
									
									<label>Event Date:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_date" type="text" name="date">	
									</div>
									<label>Times:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<input class="input-block-level" id="contact_time" type="text" name="time">	
									</div>
									<label>Catered?</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<textarea id="contact_catered" name="catered" class="input-block-level" placeholder=""></textarea>	
									</div>
									
									
									<label>Notes:</label>
									<div class="right-inner-addon">
										<span class="validation"></span>	
										<textarea id="contact_notes" name="notes" class="input-block-level" placeholder="Tell us about your event (e.g., room style set-up, special needs, etc.)."></textarea>	
									</div>
						
									<button>Send</button>
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
					<li><a href="https://www.facebook.com/pages/Museao/209489849091624" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/Museao" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://www.pinterest.com/museao/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="http://instagram.com/museao" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</div>
			</div>


<!-- end of body -->

<?php include("../snippets/javascripts.php");?> <!--global javascripts -->
<!--any other custom scripts here-->
<script type="text/javascript" src="../assets/js/bootstrap-datepicker.js"></script>
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
			
			$('#contact_date').datepicker({
				todayBtn: "linked"
			});

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