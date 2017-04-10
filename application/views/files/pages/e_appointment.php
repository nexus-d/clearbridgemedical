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
        <h1>E - Appointment</h1>
        <div class="breadcrumb-2">
            <ul class="breadcrumb">
                <li><a href="#">Contact Us</a></li>
                <li class="active">E - Appointment </li>
            </ul>
        </div>
    </div>
</div>


<div class="department-single mt-80 mb-80 custom-bgcolor">
        <div class="container">
            <div class="row">
    <div class="col-sm-8">
                    <h3>E -  Appointment Form <span class="color1"></span></h3>
                    <p>Please complete our online form below.</p>
                    <div class="frm_data custom-default-form" style="">  
<form>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Fullname *">
        </div>
    </div>
</div> 

<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Email *">
    </div>
    </div>

    <div class="col-sm-6">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Phone #">
    </div>
    </div>

</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input class="form-control date-select" type="text" placeholder="Date Of Birth *">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <select class="" tabindex="-98">
                <option>Select Country</option>
                <option>Singapore</option>
                <option>Malaysia</option>
                <option>Philippines</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Select Gender : * </label>
            <label class="radio-inline">
            <input type="radio" checked="checked" name="optradio">Male
            </label>
            <label class="radio-inline">
            <input type="radio" name="optradio">Female
            </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input class="form-control date-select" type="text" placeholder="Appointment Date">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <select class="" tabindex="-98">
                <option>Select Slot</option>
                <option>9:00 p.m. - 12:00 p.m.</option>
                <option>12:00 p.m. - 4:00 p.m.</option>
                <option>4:00 p.m. - 8:00 p.m.</option>
            </select>
        </div>
    </div>
</div>

</div>

<div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
        </div>
    </div>
</div>


</form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
        <a href="../contact-us/e-appointment" type="submit" class="col-sm-12 btn btn-info"><i class="fa fa-paper-plane"></i> Submit</a>
    </div>
</div>
</div>
   </div>


        <div class="col-sm-4">
                <aside class="sidebar">
                    <div class="widget widget-text">
                        <h4 class="heading">Need Help?</h4>
                        <p class="normal">In case of problems in filling out the form, pleease do let us know.</p>
                        <p class="color1 bold">Call Us : 1800-123-9876</p>
                        <p class="color1 bold">Email Us : info@exmaple.com</p>
                    </div>
                    <div class="widget widget-testimonial">
                       <div class="news-slider style-3">
                    <div class="slider-items">
                        <div>
                            <h4 class="heading">Program 1</h4>
                            <hr class="hr-2 left" />
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                            <a href="#" class="btn btn-sm btn-info">Read More</a>
                        </div>
                        <div>
                            <h4 class="heading">Program 2</h4>
                            <hr class="hr-2 left" />
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                            <a href="#" class="btn btn-sm btn-info">Read More</a>
                        </div>
                        <div>
                            <h4 class="heading">Program 3</h4>
                            <hr class="hr-2 left" />
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                            <a href="#" class="btn btn-sm btn-info">Read More</a>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <div class="left"><i class="fa fa-angle-left"></i></div>
                        <div class="right"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
                    </div>
                    <div class="widget widget-social">
                        <h4 class="heading">We're Social</h4>
                        <ul class="social social-2x">
                            <li><a href="#"><i class=" fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class=" fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class=" fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </aside>
            </div>


            </div>
        </div>
    </div>




    <?php echo $footer2; ?>
      <?php echo $gcse_modal; ?>
    <?php echo $sub_view_js_files; ?>
</body>
</html>