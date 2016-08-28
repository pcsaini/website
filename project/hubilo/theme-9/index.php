<?php require_once('../common.php') ?>
<!DOCTYPE  html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $event_details['event_name']; ?></title>

	<!-- Mobile Specific Metas
  	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
	<!-- Web Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,500,300' rel='stylesheet' type='text/css'>

	<!-- Theme Style -->
    <link rel="stylesheet" href="css/theme.css">   
    <link rel="stylesheet" href="css/theme-animate.css">   
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-elements-2.css">
    <link rel="stylesheet" href="css/ihover.min.css">   
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">

    <!-- Skin CSS -->
	<link id="skin" rel="stylesheet" href="css/skins/pink.css">

	<!-- Icon Fonts -->
    <link rel='stylesheet' href='fonts/font-awesome.min.css' type='text/css' media='screen' />    
    
    <!-- Library Css -->
    <link rel="stylesheet" href="css/skeleton.css"> 
    <link rel="stylesheet" href="vendor/flexslider/flexslider.css">
    <link rel="stylesheet" href="vendor/prettyPhoto/prettyPhoto.css">
    
    <!-- Responsive Theme -->
    <link rel="stylesheet" href="css/theme-responsive.css">
    
    <!-- Library Js -->
	<script src="vendor/modernizr.js"></script>
    
    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 


</head>
<body>
	<!-- BOF Loader -->
     <div class="loader">
         <div class="spinner spinner-double-bounce">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
         </div>
	</div> 
    <!-- EOF Loader -->
	<?php
            include_once('templates/header.php');?>
            <!-- BOF Main Content -->
            <div role="main" class="main">
            <?php 
            foreach ($navArray as $mainkey => $mainvalue) {
            $navId=$mainvalue['id'];
                $isCustom=$mainvalue['custom'];

               if(!$isCustom){
                    include_once('templates/'.$mainvalue['file']);
                } 
               else
                {
                    include('templates/customScreen.php');
                  }
            }
            include_once('templates/social.php');
            include_once ('templates/footer.php');
            ?>
            </div>



	<script type="text/javascript" src="vendor/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="vendor/respond.js"></script>
    <script type="text/javascript" src="vendor/jquery.appear.js"></script>    
    <script type="text/javascript" src="vendor/prettyPhoto/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="vendor/flexslider/jquery.flexslider.js"></script> 
    <script type='text/javascript' src="vendor/form-validator/jquery.form-validator.min.js"></script>	
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     
   
    <!-- Theme Initializer -->
	<script src="js/theme.js"></script>

    <!--Count Down -->
    <script type="text/javascript">

            $(".countdown").jCounter({
                date: "<?php echo date('Y/m/d', $startdate); ?>", 
                timezone: "Europe/Bucharest",
                format: "dd:hh:mm:ss",
                twoDigits: 'on',
                fallback: function() { console.log("Counter finished!") }
            });
    </script>
    
    <!-- Google Map -->
    <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                
                var mapOptions = {
                    scrollwheel: false,
                    // How zoomed in you want the map to start at (always required)
                    zoom: 15,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(<?php echo $location['lat'].','.$location['lng']?>), // New York
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
                };
                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
    
                var mapElement = document.getElementById('map');
                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $location['lat'].','.$location['lng']?>),
                    icon: 'images/map-marker.png',
                    map: map,
                    title: '<?php echo $location['address'] ?>'
                });
            }
      </script>
      <script type="text/javascript">
          $("#contact-us-form").submit(function (e) {
                e.preventDefault();
                var name = $("#sname").val(),
                    email = $("#smail").val(),
                    message = $("#message").val(),
                    organizerEmail=$("#organizer-email").val(),
                    eventName=$("#eventName-email").val(),
                    dataString = 'userName=' + name + '&userEmail=' + email + '&message=' + message + '&organizerEmail=' + organizerEmail + '&eventName=' + eventName;
                
                function isValidEmail(emailAddress) {
                    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                    return pattern.test(emailAddress);
                }

                if (isValidEmail(email) && (name.length > 1)) {
                    $("#contact-success").text("Sending.....");
                    $('#contact-us-form .button').attr('disabled',true);
                    $.ajax({
                        type: "POST",
                        url: "../mail.php",
                        data: dataString,
                        success: function () {
                            sendMessageCountIncrement(eventId);
                            $('#contact-us-form .button').addClass('success');
                            $("#contact-success").text("Sent Successfully");
                        }
                    });
                } else {
                    if (!isValidEmail(email)) {
                        $('#smail').addClass('not-valid');
                    } else {
                        $('#smail').removeClass('not-valid');
                    }
                    if (name.length === 0) {
                        $('#sname').addClass('not-valid');
                    } else {
                        $('#sname').removeClass('not-valid');
                    }
                    if (message.length === 0) {
                        $('#message').addClass('not-valid');
                    } else {
                        $('#message').removeClass('not-valid');
                    }                    
                }
                return false;
            });
      </script>

</body>
</html>