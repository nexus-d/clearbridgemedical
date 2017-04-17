<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>
    
    <?php echo $main_view_css_files; ?>

</head>

<body>

<?php echo $loading; ?>
<?php echo $header; ?>

<div class="page-header">
    <div class="container">
        <h1>Type of Test </h1>
            <div class="breadcrumb-2">
            <ul class="breadcrumb">
               
            </ul>
        </div>
    </div>
</div>


<div class="pb-40 pt-40">
<div class="container">
    <div class="col-sm-12">
            <div class="heading-block">
                <h2 class="heading">Medical Test</h2>
                <p class="sub-heading">The backbone of our clinic</p>
            </div>
        </div>
        
<div class="row">

     <div class=" col-sm-offset-2 col-md-4">
        <div class="iconbox-2 medical-test-box-style-2 hvr-grow">
            <div class="iconbox-icon">
                 <img  src="assets/images/ecal-icon.png" class="img-responsive img-rounded" alt="">
            </div>
            <div class="iconbox-content">
                <h4 class="heading">ECAL Test</h4>
                 <h5 class="text-color-rd">Resting Metabolic Rate</h5>
                    <p class="justify text-size-11">ECAL Test measures your Resting Metabolic Rate to calculate your required calori intake in order to achieve your fitness goals.<br><br></p>
                    <a href="types-of-test/metabolomic-test"  class="btn btn-primary btn-sm hvr-icon-forward hvr-pulse"> Read more</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="iconbox-2 medical-test-box-style-2 hvr-grow">
            <div class="iconbox-icon">
                 <img  src="assets/images/kenkodo-icon.png" class="img-responsive img-rounded" alt="">
            </div>
            <div class="iconbox-content">
                <h4 class="heading">Kenkodo Test</h4>
                 <h5 class="text-color-rd">Metabolomic Test</h5>
                    <p class="justify text-size-11">ClearBridge Medical Centre offers Kenkodo, a metabolism based body tracking tool. Kenkodo allows people to find their right work-life balance and predict their well-being.</p>
                    <a href="types-of-test/metabolomic-test"  class="btn btn-primary btn-sm hvr-icon-forward hvr-pulse"> Read more</a>
            </div>
        </div>
    </div>

<!--
    <div class="col-sm-offset-2 col-sm-4">
        <div class="event-box custom-event-box" style="background-image:url('assets/images/metabolic-icon.jpg')">
            <div class="event-header">
                <h3 class="heading">ECAL Test</h3>
                <ul class="event-details">
                    <li class="text-color-rd">Resting Metabolic Rate</li>
                </ul>
                <div class="event-text">
                    <br>
                    <p class="justify">ECAL Test measures your Resting Metabolic Rate to calculate your required calori intake in order to achieve your fitness goals.</p>
                    <br>
                    <a href="contact-1.html" class="btn btn-black btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="event-box custom-event-box" style="background-image:url('assets/images/metabolic-icon.jpg')">
            <div class="event-header">
                <h3 class="heading">Kenkodo Test</h3>
                <ul class="event-details">
                    <li class="text-color-rd">Metabolomic test</li>
                </ul>
                <div class="event-text">
                    <br>
                    <p class="justify">ClearBridge Medical Centre offers Kenkodo, a metabolism based body tracking tool. Kenkodo allows people to find their right work-life balance and predict their well-being.</p>
                    <br>
                    <a href="contact-1.html" class="btn btn-black btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
-->


</div>          
</div>
</div><!-- Home Medical Test-->

   

    




    <?php echo $footer; ?>
      <?php echo $gcse_modal; ?>
    <?php echo $main_view_js_files; ?>
</body>
</html>