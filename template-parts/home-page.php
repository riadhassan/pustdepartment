<?php
/**
*Template Name: Home page
*/
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pustDepartment
 */

get_header();
?>

<?php
    $sliders = get_post_meta(get_the_ID(), '_pustdep_slider', true);
?>

<div class="container-fluid banner_fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
            $slideNo = 0;
            foreach ($sliders as $slide):
                if($slideNo==0) {
	                ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $slideNo ?>" class="active"></li>
	                <?php
                }
                else {
	                ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $slideNo ?>"></li>
	                <?php
                }
            $slideNo++;
            endforeach;
                ?>
    </ol>
    <div class="carousel-inner">
	    <?php
	    $slideNo = 0;
	    foreach ($sliders as $slide):
            if ($slideNo==0) {
	            ?>
                <div class="item active">
	            <?php
            }
            else{
                ?>
                    <div class="item">
                <?php
            }
	            $pustdep_slider_img_det = wp_get_attachment_image_src($slide['_pustdep_image_id'], 'large');
	            ?>
                <img src= "<?php echo esc_url($pustdep_slider_img_det[0]);  ?>" style="width:100%;">
                <div class="carousel-caption">
                    <h2 style="color: #fff;float: left;font-weight:bold;"><span
                                style="border-left:3px solid #E2161E;margin-right:5px;"></span><?php echo $slide['_pustdep_title']; ?></h2>
                </div>
            </div>
		    <?php
            $slideNo++;
	    endforeach;
	    ?>
    </div>
</div>
</div>
	<?php
	$args_notice = array(
		'post_type'   => 'notice',
		'post_status' => 'publish',
		'posts_per_page' => 6,
	);
	$department_notice = new WP_Query( $args_notice );
	?>
    <div id="body-sp-na" style="border-top:3px solid #6C0B0B;background-color: #F1F1F1;">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-md-12" style="padding-right: 0px;padding-left: 0px;">
                    <marquee style="height: 40px;" class="gnotice" onmouseover="this.stop()" onmouseout="this.start()"
                             scrollamount="5"><font style="vertical-align: inherit;">
                            <?php
                            while ( $department_notice->have_posts() ) {
                                $department_notice->the_post();
                                ?>
                            <a href="<?php echo esc_url(get_permalink()); ?>" ><i style="color: #000;" class="fa fa-star" aria-hidden="true"></i>&nbsp; <?php echo get_the_title(); ?> &nbsp; &nbsp; &nbsp;</a>
	                            <?php
                            }
                            wp_reset_query();
                            ?>
                        </font></marquee>
                </div>
            </div>
        </div>
    </div>
    <div id="tab" style="background-color: #F1F1F1;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab"
                                                                      data-toggle="tab"><span><i
                                                class="fa fa-envelope"></i></span> Chairman Message</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                                       data-toggle="tab"><span><i class="fa fa-rocket"></i></span> Our
                                    Mission</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab"
                                                       data-toggle="tab"><span><i class="fa fa-globe"></i></span> About
                                    Department</a></li>
                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <div class="row">
                                    <div class="col-md-9 ">
                                        <div class="row vc_msg_body" style="padding: 10px;">
	                                        <?php echo wpautop( get_post_meta( get_the_ID(), '_pustdep_chairman_message', true )); ?>
                                        </div>

                                    </div>
                                    <div class="col-md-3 vc_msg_title">
                                        <div class="" style="border:none;text-align: center;">
                                            <?php
                                            $pustdep_chair_img = get_post_meta( get_the_ID(), '_pustdep_chairman_picture_id', true );
                                            $pustdep_chair_img_det = wp_get_attachment_image_src($pustdep_chair_img, 'medium_large');
                                            ?>
                                            <img src= <?php echo '"'. esc_url($pustdep_chair_img_det[0]).'"';  ?> alt="Department Cairman" class="img-responsive">
                                            <h3>Department Chairman</h3>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <div class="row vc_msg_body" style="padding: 10px;">
			                                <?php echo wpautop( get_post_meta( get_the_ID(), '_pustdep_our_vision', true )); ?>
                                        </div>

                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="vc_msg" style="border:none;">
						                 <?php
                                            $pustdep_vision_img = get_post_meta( get_the_ID(), '_pustdep_vision_image_id', true );
                                            $pustdep_vision_img_det = wp_get_attachment_image_src($pustdep_vision_img, 'medium_large');
                                            ?>
                                            <img src= <?php echo '"'. esc_url($pustdep_vision_img_det[0]).'"';  ?> alt="Vision" class="img-responsive">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <style>.glance tr td {
                                    border-top: none !important;
                                }</style>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <div class="row vc_msg_body" style="padding: 10px;">
			                                <?php echo wpautop( get_post_meta( get_the_ID(), '_pustdep_about_department', true )); ?>
                                        </div>

                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="vc_msg" style="border:none;">

	                                        <?php
	                                        $pustdep_about_img = get_post_meta( get_the_ID(), '_pustdep_about_department_image_id', true );
	                                        $pustdep_about_img_det = wp_get_attachment_image_src($pustdep_about_img, 'medium_large');
	                                        ?>
                                            <img src= <?php echo '"'. esc_url($pustdep_about_img_det[0]).'"';  ?> alt="Vision" class="img-responsive">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End .container -->
	<?php
	$args_degree = array(
		'post_type'   => 'degree',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	);
	$department_degree = new WP_Query( $args_degree );
	$count =0;
	?>
<div id="academics-holder">
<div class="container ftab" style="margin-top: 10px">
<div class="row">
<div class="col col-sm-4" >
<ul class="nav nav-tabss nav-stacked text-center" role="tablist" style="background-color: #fff;border:1px solid #d7d7d7;">
<?php
while ( $department_degree->have_posts() ) {
	$department_degree->the_post();
	$count ++;
	if ( 1 == $count ) {
		?>
        <li style="border-bottom: 1px solid #d7d7d7;text-align: left;" role="presentation" class="active"><a href="#<?php echo $count; ?>" aria-controls="fet" role="tab" data-toggle="tab"><?php the_title() ?></a>
        </li>
		<?php
	}
	else {
		?>
        <li style="border-bottom: 1px solid #d7d7d7;text-align: left;" role="presentation"><a href="#<?php echo $count; ?>" aria-controls="fet" role="tab" data-toggle="tab"><?php the_title() ?></a></li>
		<?php
	}
}
wp_reset_query();
    ?>
	</ul>
	</div>

	<?php
	$args_degree = array(
		'post_type'   => 'degree',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	);
	$department_degree = new WP_Query( $args_degree );
	$count =0;
	?>
	<div class="col col-sm-8">
		<div class="row tab-content">
<?php
while ( $department_degree->have_posts() ) {
	$department_degree->the_post();
	$post_id = get_the_ID();
	$count ++;
	$deg_detail = get_post_meta($post_id,'_pust_degreefor_home_page', true);
	if ( 1 == $count ) {
		?>
			<div role="tabpanel" class="tab-pane fade in active" id="<?php echo $count; ?>">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 style="color: red;font-size: 20px;">About <?php the_title(); ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 ">
							<p class="row vc_msg_body" style="padding: 10px;">
                                <?php echo $deg_detail; ?>
					</p>
					<a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary">Detail</a>
				</div>

						</div>
					</div>
				</div>
			</div>
		<?php
	}
	else {
		?>

		<div role="tabpanel" class="tab-pane fade" id="<?php echo $count; ?>">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 style="color: red;font-size: 20px;">About <?php the_title(); ?></h3>
				</div>
				<div class="panel-body">
					<div class="row">

		<div class="col-md-12 ">
							<p class="row vc_msg_body" style="padding: 10px;">
                                <?php echo $deg_detail; ?>

                            </p>
					<a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary">Detail</a>
				</div>
	</div>
	</div>
            </div>
        </div>
		<?php
	}
}
wp_reset_query();
?>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- End .row -->
</div>
<!-- End .container -->
</div>
<!-- End #academics-holder -->
<?php
$args_notice = array(
	'post_type'   => 'notice',
	'post_status' => 'publish',
	'posts_per_page' => 6,
);
$department_notice = new WP_Query( $args_notice );
?>
    <div id="news-events-holder" style="background: #ffffff">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 well" style="margin-left: 30px;">
                    <div class="panel panel-default">
                        <div class="panel-header well" style="text-align: center;border-bottom: 1px dashed #d7d7d7;">
                            <h1>NOTICE BOARD</h1></div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <h3 style="margin-bottom: 15px;"><span><i class="fa fa-thumb-tack"
                                                                              aria-hidden="true"></i></span> Latest
                                        Notice</h3>
                                    <marquee direction="up" height="250" onmouseover="this.stop()"
                                             onmouseout="this.start()" scrollamount="2">
                                            <?php
                                            while ( $department_notice->have_posts() ) {
                                                $department_notice->the_post();
                                                $notice_id = get_the_ID();
                                                $notice_meta_date = get_post_meta($notice_id, '_dep_date', true);
                                                $notice_meta_file = get_post_meta( $notice_id, '_dep_file', true );
                                                $notice_newDate = date("d-m-Y", strtotime($notice_meta_date));
                                                ?>

                                        <div class="notice_row">
                                            <h4><a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html(the_title()); ?></a></h4>
                                            <p><span style="color: #4eace0;"><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i> <?php echo $notice_newDate; ?> </span>
                                                <span style="color: #FC427B;margin-left: 10px;"><?php
	                                                if('0'!=$notice_meta_file){
		                                                ?>
                                                        <a href="<?php echo $notice_meta_file; ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
		                                                <?php
	                                                }
	                                                ?>
                                                </span>
                                            </p>
                                        </div>
	                                            <?php
                                            }
                                            wp_reset_query();
                                            ?>
                                    </marquee>
                                    <span class="more">
<div class="panel-footer" style="float: right;">

<p class="btn btn-primary"><a href="<?php echo get_bloginfo('url').'/notice' ?>">View All <span><i class="fa fa-arrow-right"></i></span></a></p>
</div>
</span>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

<?php
$args = array(
	'post_type'   => 'event',
	'post_status' => 'publish',
	'posts_per_page' => 5,
);
$department_events = new WP_Query( $args );
?>
    <div class="col-md-6" style="background: #ffffff;margin-left: 10px;">
        <div class="news" style="margin-left: 10px;">
            <h2>News & Events</h2>
            <div class="row news_table">
                <?php
                while ( $department_events->have_posts() ) {
	                $department_events->the_post();
                    $event_id = get_the_ID();
	                $Event_meta_date = get_post_meta($event_id, '_dep_date', true);
	                $Event_meta_file = get_post_meta( $event_id, '_dep_file', true );
	                $newDate = date("d-m-Y", strtotime($Event_meta_date));
	                ?>
                    <div class="row" style="margin: 5px;">
                    <div class="container">
                    <div class="col-md-1"></div>
                    <div class="col-md-3"> <?php
	                if ( has_post_thumbnail() )
	                        the_post_thumbnail('depevent');
		                ?>
                        </div>
                        <div class="col-md-8 news_body">
                            <h4><a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html(the_title()); ?></a></h4>
                            <p><span style="color: #4eace0;font-size:14px;"><i class="fa fa-calendar"
                                                                               aria-hidden="true"></i> <?php echo $newDate; ?> </span>
                                <span style="color: #FC427B;margin-left: 1px;">
                                    <?php
                                     if('0'!=$Event_meta_file){
                                    ?>
                                    <a href="<?php echo $Event_meta_file; ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                                         <?php
                                     }
                                     ?>
                                         </span></p>
                        </div>
                        </div>
                        </div>
		                <?php
                }
                wp_reset_query();
                ?>

            </div>
            <p style="float: right;" class="btn btn-primary"><a href="<?php echo get_bloginfo('url').'/event' ?>">See All <span><i class="fa fa-arrow-right"></i></span></a>
            </p>

        </div>
    </div>

<!-- End .col -->
</div>
<!-- End .row -->
</div>
<!-- End .container -->
</div>
<!-- End #news-events-holder -->


<?php
get_footer();