<?php require_once('../common.php') ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- page title -->
    <title><?php echo $event_details['event_name']; ?></title>
    <!-- bootstrap css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Animation css -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Nivo Theme css -->
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="css/helper.css">
    <!-- Custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- color sheet -->
    <link href="css/color.css" rel="stylesheet" type="text/css">
    <!--Hexa Style Css-->
    <link href="css/hexa-style.css" rel="stylesheet" type="text/css">
    <!--Font Awesome 4.3.0 Css-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!--  Custom Scroolbar -->
    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Signika:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- iHover css -->
    <link rel="stylesheet" type="text/css" href="css/ihover.min.css">
    <link rel="stylesheet" type="text/css" href="css/color-switcher.css"> 
</head>
<body>
    <div id="wrapper">
        <?php
        include_once('templates/banner.php');
        include_once('templates/header.php');
        include_once('templates/event-highlights.php');
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

    <!--Jquery 1.11.2-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!--Bootstrap 3.3.2 Js-->
    <script src="js/bootstrap.min.js"></script>
    <!--Respond Js-->
    <script src="js/respond.js"></script>
    <!---Countdown-->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- Smooth Scroll js -->
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <!-- portfolio js -->
    <script src="js/isotope.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/modernizr-2.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Google Map js-->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!--Custom Js-->
    <script src="js/main.js"></script>
    <!-- Tabslet JS -->
    <script src="js/jquery.tabselt.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/color-switcher.js"></script> -->
    <script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
<!--  Countdown -->
    <script type="text/javascript">
        $("#countdown").countdown("<?php echo date('Y/m/d', $startdate); ?>", function(event) {
            var $this = $(this).html(event.strftime(''
                + '<div class="clock-item clock-days countdown-time-value"> <div class="inner"> <div id="canvas-days" class="clock-canvas"></div> <div class="text"> <p class="val">%-D</p> <p class="type-days type-time">DAYS</p> </div> </div> </div>'
                + '<div class="clock-item clock-hours countdown-time-value"> <div class="inner"> <div id="canvas-hours" class="clock-canvas"></div> <div class="text"> <p class="val">%H</p> <p class="type-hours type-time">HOURS</p> </div> </div> </div>'
                + '<div class="clock-item clock-minutes countdown-time-value"> <div class="inner"> <div id="canvas-minutes" class="clock-canvas"></div> <div class="text"> <p class="val">%M</p> <p class="type-minutes type-time">MINuteS</p> </div> </div> </div>'
                + '<div class="clock-item clock-seconds countdown-time-value count-down-time-value-afternone"> <div class="inner"> <div id="canvas-seconds" class="clock-canvas"></div> <div class="text"> <p class="val">%S    </p> <p class="type-seconds type-time">Seconds</p> </div> </div> </div>'));
        });
    </script>

    <script type="text/javascript">
        $('.mytabs').tabslet({
        active: 1,
        animation: true
   });

    </script>

    <!-- Map -->
    <script type="text/javascript">
        var myLatlng = new google.maps.LatLng(<?php echo $location['lat'].','.$location['lng']?>);
        console.log(<?php echo $location['lat'].','.$location['lng']?>)
        var mapOptions = {
            zoom: 15,
            center: myLatlng,
            scrollwheel: false,
            disableDefaultUI: true,
            styles:
                [
                    {
                        "featureType": "all",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#ff0000"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": -30
                            }
                        ]
                    },
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                    {
                        "color": "#353535"
                    }
                ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#656565"
                    }
                ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                    {
                        "color": "#505050"
                    }
                ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.stroke",
                    "stylers": [
                    {
                        "color": "#808080"
                    }
                ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#454545"
                    }
                ]
                },
                    {
                        "featureType": "poi.school",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#59606b"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station.airport",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#33e5e0"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station.bus",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7cc080"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels",
                        "stylers": [
                        {
                            "hue": "#000000"
                        },
                        {
                            "saturation": 100
                        },
                        {
                            "lightness": -40
                        },
                        {
                            "invert_lightness": true
                        },
                        {
                            "gamma": 1.5
                        }
                 ]
             }
            ]
        }

        var map = new google.maps.Map(document.getElementById("map"), mapOptions);


        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);

        var address = '<?php echo $location['address'] ?>';

        var contentString = '<div style="max-width:500px;">'+
            '<h2>Venue</h2>'+
            '<p>'+address+
            '</p>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        infowindow.open(map, marker);

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
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