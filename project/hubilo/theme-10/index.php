<?php require_once('../common.php') ?>
<!DOCTYPE  html>
<html>
<head>
	<meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title><?php echo $event_details['event_name']; ?></title>
    
    <meta name="description" content="Event Landing Page">
    <meta name="keywords" content="event, conference, meetings">
    <meta name="author" content="andrewdevelopments">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="styles/main.css">

    <!-- Coustom CSS -->
    <link rel="stylesheet" type="text/css" href="styles/custom.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,600,700,800,300%7CRoboto:400,300,700,500' rel='stylesheet' type='text/css'>

    <!-- Modernizr 2.8.3 -->
    <script src="scripts/modernizr-2.8.3.min.js"></script>

    <!-- Color Scheme -->
    <link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css"> 
    <link rel="stylesheet" type="text/css" href="styles/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="styles/remodal.css">
    <link rel="stylesheet" type="text/css" href="styles/remodal-default-theme.css">

    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 


</head>
<body>

  <div class="loader">
    <div class="logo">
      <img src="<?php echo $path.'images/event/logo/thumb/'.$event_details['event_logo_img']; ?>" style="height:80px;" alt="">
    </div>
    <div class="top"></div>
    <div class="left"></div>
    <div class="bottom"></div>
    <div class="right"></div>
  </div>

    <div class="fixed-bar horizontal top"></div>
    <div class="fixed-bar vertical left"></div>
    <div class="fixed-bar vertical right"></div>
    <div class="fixed-bar horizontal bottom"></div>

	<?php        
    include_once('templates/banner.php');
    include_once('templates/header.php');
  ?>
    <!-- BOF Main Content -->
    <div class="main-wrapper">
      <?php 
      $n = 1;
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
          $n++;
        }
        include_once('templates/social.php');
        include_once ('templates/footer.php');
      ?>
    </div>

    <a href="#" class="to-top"><i class="fa fa-arrow-up"></i></a>

    <script>window.jQuery || document.write('<script src="scripts/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="scripts/components/remodal.js"></script>
    <script src="scripts/components/owl.carousel.min.js"></script>
    <script src="scripts/components/parallax.min.js"></script>
    <script src="scripts/components/SmoothScroll.js"></script>
    <script src="scripts/components/jquery.magnific-popup.min.js"></script>
    <script src="scripts/components/countdown.js"></script>
    <script src="scripts/components/masonry.min.js"></script>
    <script src="scripts/components/waypoints.min.js"></script>
    <script src="scripts/components/counterup.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="scripts/components/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="scripts/main.js"></script>


    <!-- <script type="text/javascript">
      jQuery('body').append('<script src="assets/js/color-switcher.js">');
    </script> -->

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

    
    


</body>
</html>