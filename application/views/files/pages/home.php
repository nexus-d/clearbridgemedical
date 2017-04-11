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

<!--
<div class="col-md-12 offset-t-23">
<div  class="tri-t-right"></div>
<div  class="tri-t-left"></div>
</div>-->
<div class="custom-bg-white" >
        <div class="container">
            <div class="row">
                <div class="col-sm-3 ">
                    <div class="iconbox-4 custom-iconbox-4">
                        <span class="iconbox-icon">
                            <i class="icon-i-social-services"></i>
                        </span>
                        <h4 class="heading">Wellness</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonan.</p>
                        <a href="wellness" class="btn btn-info"> Read more</a>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="iconbox-4 custom-iconbox-4">
                        <span class="iconbox-icon">
                            <i class="fa fa-heart"></i>
                        </span>
                        <h4 class="heading"> Fitness</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonan.</p>
                        <a href="fitness" class="btn btn-info"> Read more</a>
                    </div>
                </div>

               <div class="col-sm-3 ">
                    <div class="iconbox-4 custom-iconbox-4">
                        <span class="iconbox-icon">
                            <i class="fa fa-flask"></i>
                        </span>
                        <h4 class="heading"> Medical Test</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonan.</p>
                        <a href="types-of-test" class="btn btn-info"> Read more</a>
                    </div>
                </div> 

                <div class="col-sm-3 ">
                    <div class="iconbox-4 custom-iconbox-4">
                        <span class="iconbox-icon">
                            <i class="fa fa-stethoscope"></i>
                        </span>
                        <h4 class="heading">Our Programs</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonan.</p>
                        <a href="our-programs" class="btn btn-info"> Read more</a>
                    </div>
                </div> 



            </div>    
    </div>
</div>   
<!--
<div class="col-md-12">
<div class="tri-b-right"></div>
<div class="tri-b-left"></div>
</div>-->

<div class="mt-80">
 <div class="container">
        <div class="row">
            <div class="col-sm-6">
                
                    <h2 class="heading custom-heading-max-wg">Who <span class="color1">Are</span> We?</h2>
                    <p class="sub-heading">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
               
            </div>
            <div class="col-sm-12">
                <div class="iconbox-2 right">
                    <div class="text">
                        <h4 class="heading">About Us</h4>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="about-us" class="btn btn-info btn-sm">Read More</a>    
                    </div>
                </div>


                <img src="">
                <!--
                <div class="iconbox-2 right">
                    <!--<span class="count"><i class="fa fa-user"></i></span>
                   <div class="text">
                        <h4 class="heading">Mission and Vision</h4>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="why-us.html" class="btn btn-info btn-sm">Read More</a>    
                    </div>
                </div>-->

            </div>
        </div>
 
</div>


<div>
<div class="container mt-80  mb-80">

        <div class="row">
            <div class="col-sm-12">
                <h2 class="heading custom-heading-max-wg">We value your <span class="color1">Life</span></h2>
                
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
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                            <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class=""> <!--gradient div-->



<div class="pt-40  custom-bg-darkblue home-medical-test">
<div class="container">
    <div class="col-sm-12">
            <h2 class="">Medical Test</h2>
            <p class="caption-text-p">The Backbone of our clinic</p>
    </div>
<div class="row">
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
                    <a href="types-of-test/metabolomic-test" class="btn btn-black btn-sm">Read More</a>
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
                    <a href="types-of-test/metabolomic-test" class="btn btn-black btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>          
</div>
</div><!-- Home Medical Test-->



</div>


<div class="call-out-1 pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="left">
                        <h3 class="inverse font-2 font24">Medical Test need. <strong>Wherever you need.</strong></h3>
                        <p class="inverse">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right">
                        <i class="fa fa-message"></i>
                        <span class="call-us"><strong class="inverse text-capitalize font20">Email Us</strong><br>test@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div><!--gradient div-->

<div class="pt-40 pb-40 bgcolor2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="counter-box-4">
                        <div class="fact-icon">
                            <i class="fa fa-scissors"></i>
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
                            <i class="fa fa-scissors"></i>
                        </div>
                        <div class="fact-body">
                            <span class="fact-count" data-from="0" data-to="245" data-speed="3000">245</span>
                            <h5 class="heading">Experienced Doctors On Panel</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="counter-box-4">
                        <div class="fact-icon">
                            <i class="fa fa-scissors"></i>
                        </div>
                        <div class="fact-body">
                            <span class="fact-count" data-from="0" data-to="930" data-speed="3000">930</span>
                            <h5 class="heading">Healthy Meals served to patients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="counter-box-4">
                        <div class="fact-icon">
                            <i class="fa fa-scissors"></i>
                        </div>
                        <div class="fact-body">
                            <span class="fact-count" data-from="0" data-to="120" data-speed="3000">120</span>
                            <h5 class="heading">Emergency Ready to Help</h5>
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