<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title><?php echo $title;?></title>
    
    <?php echo $sub_view_css_files; ?>
 <style>
           /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:500px;
      }
      /* Optional: Makes the sample page fill the window. */
   
      #floating-panel {
        position: relative;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
        height: 500px;
        float: right;
        width: 390px;
        overflow: auto;
      }
     
      #floating-panel {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }
      @media print {
        #map {
          height: 500px;
          margin: 0;
        }
        #right-panel {
          float: none;
          width: auto;
        }
      }
    
    </style>
</head>

<body>

<?php echo $loading; ?>
<?php echo $header2; ?>

<div class="page-header">
    <div class="container">
        <h1>Mailiing Address </h1>
        <div class="breadcrumb-2">
            <ul class="breadcrumb">
                <li><a href="#">Contact Us</a></li>
                <li class="active">Mailiing Address </li>
            </ul>
        </div>
    </div>
</div>



<div class="container mt-80 mb-80">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <h2 class="heading text-center">Get in <span class="color1"> Touch with Us</span></h2>
                </div>
            </div>
            <div class="col-sm-12 mt-20">
                <div class="focus-box-1">
                    <address>
                        <strong>Singapore Office</strong><br>
                       Clearbridge Medical Centre
                        <br>
                    </address>
                    <ul class="contact-list">
                    <li>
                        <i class="fa fa-map-marker"></i>37 Jalan Pemimpin #08-05 Mapex Singapore 577177
                    </li>
                        <li>
                            <i class="fa fa-phone"></i>Hotline: +65 6254 8685
                        </li>

                        <li>
                            <i class="fa fa-phone-square"></i> Main Line : +65 6251 0136
                        </li>
                        <li>
                            <i class="fa fa-fax"></i> Fax Line: +65 6251 0132
                        </li>
                    </ul>
                </div>
                
                <br/>
                </div>
        <div class="col-sm-8">
            <div id="floating-panel">
                <b>Mode of Travel: </b>
                <select id="mode">
                <option value="DRIVING">Driving</option>
                <option selected="selected" value="WALKING">Walking</option>
                <option value="TRANSIT">Transit</option>
                </select>
            </div>

            <div id="map"></div>


        </div>
        <div class="col-sm-4">
           <div id="right-panel"></div> 
        </div>
    </div>
        
    </div>
  </div>  



    <?php echo $footer2; ?>
      <?php echo $gcse_modal; ?>
    <?php echo $sub_view_js_files; ?>

  <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 14,
          center: {lat: 1.3487963, lng: 103.8408780}

        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        calculateAndDisplayRoute(directionsService, directionsDisplay);
        document.getElementById('mode').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {

   if (navigator.geolocation) { //Checks if browser supports geolocation
      navigator.geolocation.getCurrentPosition(function (position) {                                                              //This gets the
      var latitude = position.coords.latitude;                    //users current
      var longitude = position.coords.longitude;                 //location
      var coords = new google.maps.LatLng(latitude, longitude); //Creates variable for map coordinates
      var mode =  document.getElementById('mode').value;

        directionsService.route({
          origin: coords,  // Current Location.
          destination: {lat: 1.3487963, lng: 103.8408780},
          travelMode: mode
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });

   });
 }

      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4XUPGA9TMbCGypqWidsj-fx69wrxBuRU&callback=initMap">
    </script>
   
</body>
</html>