<?php
///**
// * The template for displaying the footer
// *
// * Contains the closing of the #content div and all content after.
// *
// * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
// *
// * @package pustDepartment
// */
//
//?>
<!---->
<!--	</div><!-- #content -->
<!---->
<!--	<footer id="colophon" class="site-footer">-->
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'pustdepartment' ) ); ?><!--">-->
<!--				--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'pustdepartment' ), 'WordPress' );
//				?>
<!--			</a>-->
<!--			<span class="sep"> | </span>-->
<!--				--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'pustdepartment' ), 'pustdepartment', '<a href="http://underscores.me/">Underscores.me</a>' );
//				?>
<!--		</div><!-- .site-info -->
<!--	</footer><!-- #colophon -->
<!--</div><!-- #page -->
<!---->
<?php //wp_footer(); ?>
<!---->
<!--</body>-->
<!--</html>-->


<div id="full-footer">
    <div id="" >
        <div class="container">
            <div class="row" style="margin-top: 15px !important;">
                <div class="col-md-4 vertical-menu">
                    <div class="container-fluid">
                        <?php
                            if(is_active_sidebar('lfooter')){
                                dynamic_sidebar('lfooter');
                            }
                        ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="list-group">


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 vertical-menu">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="list-group">
	                                <?php
	                                if(is_active_sidebar('mfooter')){
		                                dynamic_sidebar('mfooter');
	                                }
	                                ?>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-4">
                                <div style="width: 350px;">
	                                <?php
	                                if(is_active_sidebar('rfooterup')){
		                                dynamic_sidebar('rfooterup');
	                                }
	                                ?>
                                </div>
                            </div>
                        </div>

                    </div>
	                <?php
	                if(is_active_sidebar('rfootermiddle')){
		                dynamic_sidebar('rfootermiddle');
	                }
	                ?>
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-4">
                                <div style="width: 350px;">
	                                <?php
	                                if(is_active_sidebar('rfooterbottom')){
		                                dynamic_sidebar('rfooterbottom');
	                                }
	                                ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End .col -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End #prefooter -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
	                <?php
	                if(is_active_sidebar('tbfooter')){
		                dynamic_sidebar('tbfooter');
	                }
	                ?>
                </div>
                <!-- End .col -->

                <!-- End .col -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End #footer -->
</div>
<!-- End #full-footer -->
<span id="bg-tab"></span>
</div>
<a href="#" id="backToTop"></a>
<!-- Bootstrap core JavaScript
================================================== -->
<!--<script src="asset/js/bootstrap.js"></script>-->
<!-- End Flex slider
<script src="{{asset('asset//js/script.js')}}"></script>
Mobile Menu -->
<!--<script src="asset/js/jquery.mmenu.min.all.js" type="text/javascript"></script>-->
<script type="text/javascript">
    $('nav#menu').mmenu();
</script>
<?php wp_footer(); ?>
<!--<script src="asset/js/script.js"></script>-->
<!-- Mobile Menu End -->
<script type="text/javascript">
    $(document).ready(function($){
        var url = window.location.href;
        $('#header #nav-bar .main-nav  ul  li  a[href="'+url+'"]').addClass('active');
    });
</script>
<!--<script src="asset/js/jquery.easeScroll.js"></script>-->
<script>
    $("html").easeScroll({
        frameRate: 60,
        animationTime: 1000,
        stepSize: 120,
        pulseAlgorithm: 1,
        pulseScale: 8,
        pulseNormalize: 1,
        accelerationDelta: 20,
        accelerationMax: 1,
        keyboardSupport: true,
        arrowScroll: 50,
        touchpadSupport: true,
        fixedBackground: true
    });
</script>


</body>
</html>