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
</div>

<div class="">

        <div class="container pt-20">
            <div class="col-sm-12">
                <div class="heading-block ">
                    <h2 class="heading">About Us</h2>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <div class="accordion-2">
                    <div class="panel-group" id="a3" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="a3heading1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#a3" href="#a3body1" aria-expanded="true" aria-controls="a3body1" class="">
                                       Overview
                                    </a>
                                </h4>
                            </div>
                            <div id="a3body1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="a3heading1" aria-expanded="true">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="a3heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#a3" href="#a3body2" aria-expanded="true" aria-controls="a3body2">
                                      Mission and Vision
                                    </a>
                                </h4>
                            </div>
                            <div id="a3body2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="a3heading2" aria-expanded="false">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
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