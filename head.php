<!-- http://verifyjs.com/ -->
<head>

	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>RENT-A-BOAT</title>
	
	<noscript>Your browser does not support JavaScript!</noscript>
	
	<!--VALIDATION-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="js/verify.notify.min.js"></script>

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<!-- GOOGLE MAPS FOOTER -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
		
	<script>
	      function initialize() {
	        var mapCanvas = document.getElementById('map-canvas');
	        var mapOptions = {
	          center: new google.maps.LatLng(44.8167, 20.4667),
	          zoom: 10,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(mapCanvas, mapOptions)
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	<!-- FLEXSLIDER -->

	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8"></script>
	<script>	
		 $(document).ready(function () {
    $('.flexslider').flexslider({
		slideshowSpeed: 5000,
        after: function (slider) {
            if (!slider.playing) {
                slider.play();
            }
        }
	    });
	});

	</script>

	<!-- STICKY-NAV -->

	<script type="text/javascript">
	var win  = $(window),
    fxel     = $('nav'),
    eloffset = fxel.offset().top;

	win.scroll(function() {
    if (eloffset < win.scrollTop()) {
        fxel.addClass("nav.fixed");
    } else {
        fxel.removeClass("nav.fixed");
    }
});
	</script>
		
</head>