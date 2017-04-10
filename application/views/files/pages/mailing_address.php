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
                
                <!-- Replace Latitude, Logitude and Info Window as per your place -->
                <div class="gmap"
                     style="height:300px;" 
                     data-lat="1.3487963" 
                     data-long="103.8408780"
                     data-info-win="<strong>Clearbridge Medical Centre</strong><br/><span>37 Jalan Pemimpin
#08-05 Mapex
Singapore 577177</span>">
                </div>
            </div>
<!--
            <div class="col-sm-6 mt-20">
                <div class="focus-box-1">
                    <address>
                        <strong>Australia Perth Office</strong><br>
                       Clearbridge Medical Centre
                        <br>
                    </address>
                    <ul class="contact-list">
                    <li>
                        <i class="fa fa-map-marker"></i>Level 10, 167 Queen Street  Melbourne VIC 3000 Australia
                    </li>
                       

                    <li>
                        <i class="fa fa-phone-square"></i> Main Line: +61 8 6102 0938
                         <br/>
                          <br/>
                           <br/> <br/>
                    </li>
                   
                        
                    </ul>
                </div>
                
                <br/>
                
    
                <div class="gmap"
                     style="height:300px;" 
                     data-lat="-37.814200" 
                     data-long="144.960195"
                     data-info-win="<strong>Clearbridge Medical Centre</strong><br/><span>Level 10, 167 Queen Street Melbourne VIC 3000 Australia</span>">
                </div>
            </div>

    -->        
    </div>
  </div>  



    <?php echo $footer2; ?>
      <?php echo $gcse_modal; ?>
    <?php echo $sub_view_js_files; ?>

     <script src="http://maps.google.com/maps/api/js?key=AIzaSyB4XUPGA9TMbCGypqWidsj-fx69wrxBuRU" type="text/javascript"></script>
   
</body>
</html>