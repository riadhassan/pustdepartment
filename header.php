            <!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="">


<?php wp_head(); ?>
</head>


<body id="inner-page" <?php body_class(); ?>>
<div id="header">

    <!-- mobile menu -->
    <a class="mobilemenu" href="#menu">Responsive Mobile Menu</a>
    <!-- mobile menu end -->
    <div class="mobile-menu-logo">
        <a href="<?php echo get_bloginfo('url') ?>"><?php if(has_custom_logo()){
		        the_custom_logo();
	        } ?>
        </a>
    </div>
    <div id="header-top" style="background: #4CA1D7;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="logo">
                        <a href="<?php echo get_bloginfo('url') ?>">
                            <?php if(has_custom_logo()){
                                the_custom_logo();
                            } ?>
                        </a>
                    </div>
                    <div class="top-nav">
                        <h1 style="font-size: 35px;font-family: Cambria;"><?php echo get_bloginfo('description') ?></h1>
                        <div class="top-content" style="color:#ecf0f1;font-size:16px;">
                            <!--  <a target="_blank" href="http://old.pust.ac.bd" class="forms-and-downloads"> <i class="fa fa-globe" aria-hidden="true"></i> Old Website</a>  -->
                        </div>
                    </div>
                </div>
                <!-- End .col -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End #header-top -->

    <?php get_template_part("template-parts/navbar"); ?>
</div>
<!-- End #header -->