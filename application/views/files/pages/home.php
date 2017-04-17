<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript" >
    <title><?php echo $title;?></title>
    
    <?php echo $main_view_css_files; ?>

</head>

<body>

<?php echo $loading; ?>
    <?php echo $header; ?>

<div  class="carousel slide" id="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carousel"></li>
        <li data-slide-to="1" data-target="#carousel"></li>
        <li data-slide-to="2" data-target="#carousel"></li>
        <li data-slide-to="3" data-target="#carousel"></li>
        <li data-slide-to="4" data-target="#carousel"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="assets/images/Untitled-5.png" alt="First slide">
        </div>
        <div class="item">
            <img src="assets/images/Untitled-6.png" alt="Second slide">
        </div>
          <div class="item">
            <img src="assets/images/Untitled-3.png" alt="Second slide">
        </div>
          <div class="item">
            <img src="assets/images/Untitled-7.png" alt="Second slide">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" data-slide="prev" href="#carousel">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="right carousel-control" data-slide="next" href="#carousel">
        <i class="fa fa-angle-right"></i>
    </a>
</div>


<div class="custom-bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 ">
                    <div class="iconbox-4 custom-iconbox-4">
                        <span class="iconbox-icon">
                            <i class="icon-i-social-services"></i>
                        </span>
                        <h4 class="heading">Wellness</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonan.</p>
                        <a href="wellness" class="btn btn-info hvr-icon-forward hvr-pulse"> Read more</a>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="iconbox-4 custom-iconbox-4">
                        <span class="iconbox-icon">
                            <i class="fa fa-heart"></i>
                        </span>
                        <h4 class="heading"> Fitness</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonan.</p>
                        <a href="fitness" class="btn btn-info hvr-icon-forward hvr-pulse"> Read more</a>
                    </div>
                </div>

               <div class="col-sm-3 ">
                    <div class="iconbox-4 custom-iconbox-4">
                        <span class="iconbox-icon">
                            <i class="fa fa-user-md"></i>
                        </span>
                        <h4 class="heading"> Medical Test</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonan.</p>
                        <a href="types-of-test" class="btn btn-info hvr-icon-forward hvr-pulse"> Read more</a>
                    </div>
                </div> 

                <div class="col-sm-3 ">
                    <div class="iconbox-4 custom-iconbox-4">
                        <span class="iconbox-icon">
                            <i class="fa fa-stethoscope"></i>
                        </span>
                        <h4 class="heading">Our Programs</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonan.</p>
                        <a href="our-programs" class="btn btn-info hvr-icon-forward hvr-pulse"> Read more</a>
                    </div>
                </div> 

            </div>    
    </div>
</div>   





<div class="bg-image-parallax pt-20 pb-20">
    <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-block">
                        <h2 class="heading">Who are we ?</h2>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-3 mt-20 mb-20">
                 <a href="about-us"><img  src="assets/images/about-us-icon-15.jpg" class="img-responsive hvr-pulse" alt=""></a>
                </div>
                <div class="col-sm-4">
                <div class="feature-box justify highlight-text">
                    <div class="text">
                        <h4 class="heading">Hi-Tech Infrastructure</h4>
                        <p class="justify">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                    <a href="about-us" class="btn btn-primary hvr-icon-forward hvr-pulse">Read More</a>
                </div>
                </div>
            </div>
        </div>
</div>





<div class="bg-image-parallax pt-20 pb-20">
    <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-block">
                        <h2 class="heading">Why Clearbridge Medical Centre ?</h2>
                    </div>
                </div>
                <div class="  col-sm-4">
                <div class="feature-box justify highlight-text">
                    <div class="text">
                        <h4 class="heading">Hi-Tech Infrastructure</h4>
                        <p class="justify">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                      
                    </div>
                </div>
                </div>
                <div class=" col-sm-8 mt-20 mb-20">
                <img  src="assets/images/20130912-is-shot-d-0242.png" class="img-responsive img-rounded hvr-grow" alt="">
                <ul class="social pull-right">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa fa-google"></i></a></li>
                </ul>
                </div>

            </div>
        </div>
</div>

















 <!--
<div class="custom-bg-gray pt-20 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-block">
                    <h2 class="heading">About Lifestyle</h2>
                    </br >
                </div>
            </div>
            <div class="col-sm-12">
                <div class="tabs-1">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#t1body1" aria-controls="t1body1" role="tab" data-toggle="tab" aria-expanded="true">
                                <strong>Wellness</strong>
                                <span> <br/ ></span>
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#t1body2" aria-controls="t1body2" role="tab" data-toggle="tab" aria-expanded="false">
                                <strong>Fitness</strong>
                                <span><br/ ></span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="t1body1">
                             is more than being free from illness, it is a dynamic process of change and growth. "...a state of complete physical, mental, and social well-being, and not merely the absence of disease or infirmity.
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="t1body2">
                            <p> is more than being free from illness, it is a dynamic process of change and growth. "...a state of complete physical, mental, and social well-being, and not merely the absence of disease or infirmity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<div class="custom-gradient-1 pt-20 pb-20">
    <div class="container">
        <div class="col-sm-12">
            <div class="heading-block">
                <h2 class="heading">Medical Test</h2>
                <p class="sub-heading">The backbone of our clinic</p>
            </div>
        </div>
        


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


      

        </div>          
   
</div>





<div class="custom-gradient-2 pt-20 pb-20">
        <div class="container">
        <div class="col-sm-12">
                <div class="heading-block">
                    <h2 class="heading">Our Programs</h2>
                    <p class="sub-heading">Check out our program.</p>
                </div>
        </div>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-4">
                    <div class="iconbox-2 program-box-style-1 hvr-grow">
                    <div class="iconbox-icon">
                    <img src="assets/images/program-1-icon.png" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="iconbox-content">
                    <h4 class="heading">Program 1</h4>
                    <h5 class="text-color-rd">Program 1</h5>
                    <p class="justify text-size-11">ehind the word mountains, far from the countries Vokalia and Consonan.<br><br></p>
                    <a href="types-of-test/program-1" class="btn btn-primary btn-sm hvr-icon-forward hvr-pulse"> Read more</a>
                    </div>
                    </div>
                </div>
              
                <div class="col-sm-4">
                    <div class="iconbox-2 program-box-style-1 hvr-grow">
                    <div class="iconbox-icon">
                    <img src="assets/images/program-2-icon.png" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="iconbox-content">
                    <h4 class="heading">Program 2</h4>
                    <h5 class="text-color-rd">Program 2</h5>
                    <p class="justify text-size-11">ehind the word mountains, far from the countries Vokalia and Consonan.<br><br></p>
                    <a href="types-of-test/program-1" class="btn btn-primary btn-sm hvr-icon-forward hvr-pulse"> Read more</a>
                    </div>
                    </div>
                </div>
               
               
            </div>
        </div>
    </div>


<div class="call-out-1 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="left">
                        <h3 class="inverse font-2 font24"> <strong>Wherever you need Medical Test.</strong></h3>
                        <p class="inverse">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right">
                        <i class="fa fa-message"></i>
                        <span class="call-us"><strong class="inverse ">Email Us</strong><br>test@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
</div>



<div class="pt-20 pb-20 custom-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="counter-box-4">
                    <div class="fact-icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="fact-body">
                        <span class="fact-count" data-from="0" data-to="912" data-speed="3000">912</span>
                        <h5 class="heading">Number of Test</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="counter-box-4">
                    <div class="fact-icon">
                        <i class="fa fa-user-md"></i>
                    </div>
                     <div class="fact-body">
                        <span class="fact-count" data-from="0" data-to="912" data-speed="3000">912</span>
                        <h5 class="heading">Experienced Doctors On Panel</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="counter-box-4">
                    <div class="fact-icon">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <div class="fact-body">
                        <span class="fact-count" data-from="0" data-to="200" data-speed="3000">200</span>
                        <h5 class="heading">Our Programs</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="counter-box-4">
                    <div class="fact-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="fact-body">
                        <span class="fact-count" data-from="0" data-to="930" data-speed="3000">930</span>
                        <h5 class="heading">Total visitors</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php echo $footer; ?>
    <?php echo $gcse_modal; ?>
    <?php echo $main_view_js_files; ?>
</body>
</html>