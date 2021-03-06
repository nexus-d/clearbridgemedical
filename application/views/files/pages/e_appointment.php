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
<form id="frm-data">
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <input class="form-control has-error" type="text" name="fullname" placeholder="Fullname *"
             data-error-msg="Fullname name is required." required>
        </div>
    </div>
</div> 

<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
        <input class="form-control" type="text"  name="email"  placeholder="Email *"  
        data-error-msg="Email name is required." required >
    </div>
    </div>

    <div class="col-sm-6">
    <div class="form-group">
        <input class="form-control" type="text"  name="phone"  placeholder="Phone #" >
    </div>
    </div>

</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input class="form-control date-select"  data-date-format='yy-mm-dd'  name="birthdate"  type="text" placeholder="Date Of Birth *"  data-error-msg="Date of Birth name is required." required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <select class="" tabindex="-98" name="country">
                <option>Select Country</option>
                <option value="Singapore">Singapore</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Philippines">Philippines</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Select Gender : * </label>
            <label class="radio-inline">
            <input type="radio" value="Male" checked="checked" name="gender">Male
            </label>
            <label class="radio-inline">
            <input type="radio" value="Female" name="gender">Female
            </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input class="form-control date-select" type="text"  name="appointment_date" placeholder="Appointment Date">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <select class="" tabindex="-98" name="appointment_time">
                <option>Select Slot</option>
                <option value="9:00 p.m. - 12:00 p.m.">9:00 p.m. - 12:00 p.m.</option>
                <option value="12:00 p.m. - 4:00 p.m.">12:00 p.m. - 4:00 p.m.</option>
                <option value="4:00 p.m. - 8:00 p.m.">4:00 p.m. - 8:00 p.m.</option>
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
        <button class="col-sm-12 btn btn-info" id="btn-submit-eapps"><i class="fa fa-paper-plane"></i> Submit</button>
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