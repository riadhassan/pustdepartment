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
<div id="body-sp-na" style="border-top:3px solid #6C0B0B;background-color: #F1F1F1;">
<div class="container-fluid">
<div class="row" >
<div class=" col-md-12" style="padding-right: 0px;padding-left: 0px;">
<marquee style="height: 40px;" class="gnotice" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="5" ><font style="vertical-align: inherit;">
<a href=/admission/Evening_Programs target="_blank"><i style="color: #000;" class="fa fa-star" aria-hidden="true"></i>
                                                                                                                    MCSE Circular July 2019</a>
<a href=/notices/general target="_blank"><i style="color: #000;" class="fa fa-star" aria-hidden="true"></i>
                                                                                                         Invitation for Tender (OTM)</a>
<a href=/notices/general target="_blank"><i style="color: #000;" class="fa fa-star" aria-hidden="true"></i>
                                                                                                         Trasport Schedule during  Ramadan</a>
<a href=/notices/general target="_blank"><i style="color: #000;" class="fa fa-star" aria-hidden="true"></i>
                                                                                                         PUST Contacts App for Android</a>
<a href=/notices/general target="_blank"><i style="color: #000;" class="fa fa-star" aria-hidden="true"></i>
                                                                                                         Ramadan Office Time (09:00AM to 03:30PM)</a>
<a href=/admission/Evening_Programs target="_blank"><i style="color: #000;" class="fa fa-star" aria-hidden="true"></i>
                                                                                                                    Circular for MBA Admission (Evening &amp; Executive)</a>
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
                                            <pre><?php print_r($sliders) ?></pre>
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
<div id="academics-holder">
<div class="container ftab" style="margin-top: 10px">
<div class="row">
<div class="col col-sm-4" >
<ul class="nav nav-tabss nav-stacked text-center" role="tablist" style="background-color: #fff;border:1px solid #d7d7d7;">
	<li style="border-bottom: 1px solid #d7d7d7;text-align: left;" role="presentation" class="active"
		><a href="#1" aria-controls="fet" role="tab" data-toggle="tab">B.Sc (Engineering)</a></li>
		<li style="border-bottom: 1px solid #d7d7d7;text-align: left;" role="presentation"
		><a href="#2" aria-controls="fet" role="tab" data-toggle="tab">M.Sc (Engineering)</a></li>
		<li style="border-bottom: 1px solid #d7d7d7;text-align: left;" role="presentation"
		><a href="#6" aria-controls="fet" role="tab" data-toggle="tab">M. Phil</a></li>
	</ul>
	</div>
	<div class="col col-sm-8">
		<div class="row tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 style="color: red;font-size: 20px;">Departments under the Faculty of Engineering and Technology</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 ">
							<p class="row vc_msg_body" style="padding: 10px;">
							The present era is the era of science and technology. To keep pace with the progressed world and to meet the global challenges, the government
							is stepping forward with the promise of establishing Digital Bangladesh. As part of its vision of Digital Bangladesh and with a view to imparting
							science and technology oriented knowledge, Pabna University of Science and Technology was established in 2008. Since its inception, the University
							has made steady progress within a very short period of time. The University is growing rapidly in terms of activity, quality, research and reputation. It provides multidisciplinary education with five faculties namely Engineering and Technology, Science, Business Studies, Humanities and Social Science and Life and Earth Science. Now the University has 21 departments under five faculties. Through creating and disseminating knowledge, PUST is trying to promote excellence in higher education by producing skilled manpower and enlightened citizen based on science and technology. Each and every member of this University is working hard to ensure quality education and thereby to accomplish its mission – producing quality graduates to meet the national and global challenges.
							As a Vice-Chancellor of this university, I dream of producing qualitative and research oriented manpower to solve the existing, long term and newly
						arisen problems that the country faces every day.
					</p>
					<button type="button" class="btn btn-primary">Detail</button>
				</div>

						</div>
					</div>
				</div>
			</div>

		<div role="tabpanel" class="tab-pane fade" id="2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 style="color: red;font-size: 20px;">Departments under the Faculty of Science</h3>
				</div>
				<div class="panel-body">
					<div class="row">

		<div class="col-md-12 ">
							<p class="row vc_msg_body" style="padding: 10px;">
							The present era is the era of science and technology. To keep pace with the progressed world and to meet the global challenges, the government
							is stepping forward with the promise of establishing Digital Bangladesh. As part of its vision of Digital Bangladesh and with a view to imparting
							science and technology oriented knowledge, Pabna University of Science and Technology was established in 2008. Since its inception, the University
							has made steady progress within a very short period of time. The University is growing rapidly in terms of activity, quality, research and reputation. It provides multidisciplinary education with five faculties namely Engineering and Technology, Science, Business Studies, Humanities and Social Science and Life and Earth Science. Now the University has 21 departments under five faculties. Through creating and disseminating knowledge, PUST is trying to promote excellence in higher education by producing skilled manpower and enlightened citizen based on science and technology. Each and every member of this University is working hard to ensure quality education and thereby to accomplish its mission – producing quality graduates to meet the national and global challenges.
							As a Vice-Chancellor of this university, I dream of producing qualitative and research oriented manpower to solve the existing, long term and newly
						arisen problems that the country faces every day.
					</p>
					<button type="button" class="btn btn-primary">Detail</button>
				</div>








	</div>
	</div></div></div>

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
<div id="news-events-holder" style="background: #ffffff">
<div class="container-fluid">
<div class="row">
<div class="col-md-5 well" style="margin-left: 30px;">
<div class="panel panel-default">
<div class="panel-header well" style="text-align: center;border-bottom: 1px dashed #d7d7d7;"><h1>NOTICE BOARD</h1></div>
<div class="panel-body" >
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<h3 style="margin-bottom: 15px;"><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Latest Notice</h3>
<marquee direction="up" height="250" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">

<div class="notice_row">
<h4>Invitation for Tender (OTM)</h4>
<p><span style="color: #4eace0;"><i class="fa fa-calendar" aria-hidden="true"></i> 11:21am, 11th May, 2019 </span>
<span style="color: #FC427B;margin-left: 10px;"><i class="fa fa-download" aria-hidden="true"></i> <a href="includes/images/notices/Invitation for Tender OTM.pdf" download="download">Download</a> </span></p>
</div>
<div class="notice_row">
<h4>Trasport Schedule during  Ramadan</h4>
<p><span style="color: #4eace0;"><i class="fa fa-calendar" aria-hidden="true"></i> 11:41am, 8th May, 2019 </span>
<span style="color: #FC427B;margin-left: 10px;"><i class="fa fa-download" aria-hidden="true"></i> <a href="includes/images/notices/Transport Schedule.pdf" download="download">Download</a> </span></p>
</div>
<div class="notice_row">
<h4>PUST Contacts App for Android</h4>
<p><span style="color: #4eace0;"><i class="fa fa-calendar" aria-hidden="true"></i> 9:28pm, 7th May, 2019 </span>
<span style="color: #FC427B;margin-left: 10px;"><i class="fa fa-download" aria-hidden="true"></i> <a href="includes/images/notices/pust_contacts.apk" download="download">Download</a> </span></p>
</div>
<div class="notice_row">
<h4>Ramadan Office Time (09:00AM to 03:30PM)</h4>
<p><span style="color: #4eace0;"><i class="fa fa-calendar" aria-hidden="true"></i> 4:24pm, 4th May, 2019 </span>
<span style="color: #FC427B;margin-left: 10px;"><i class="fa fa-download" aria-hidden="true"></i> <a href="includes/images/notices/Ramadan_Office_Time_Notice.pdf" download="download">Download</a> </span></p>
</div>

</marquee>
<span class="more">
<div class="panel-footer"style="float: right;" >

<p class="btn btn-primary"><a href="http://pust.ac.bd/notices/general" >View All <span><i class="fa fa-arrow-right"></i></span></a></p>
</div>
</span>
</div>


</div>
</div>

</div>
</div>


<div class="col-md-6" style="background: #ffffff;margin-left: 10px;">
<div class="news" style="margin-left: 10px;" >
<h2>News & Events</h2>
<div class="row news_table">

<div class="row" style="margin: 5px;">
<div class="container">
<div class="col-md-1"></div>
<div class="col-md-3"><img src="includes/images/news/images/money.jpg" alt="ghcgfy" height="150px" width="280px"></div>
<div class="col-md-8 news_body">
<h4 ><a href="">আর্থিক ব্যবস্থাপনা বিষয়ক কর্মশালা </a></h4>
<p><span style="color: #4eace0;font-size:14px;"><i class="fa fa-calendar" aria-hidden="true"></i> 22/03/19</span>
<span style="color: #FC427B;margin-left: 1px;"><a href="http://pust.ac.bd/includes/images/news/file/money.pdf"><i class="fa fa-download" aria-hidden="true"></i> Download</a> </span></p>
</div>
</div>
</div>

<div class="row" style="margin: 5px;">
<div class="container">
<div class="col-md-1"></div>
<div class="col-md-3"><img src="includes/images/news/images/birthday.jpg" alt="gfyufty" height="150px" width="280px"></div>
<div class="col-md-8 news_body">
<h4 ><a href=""> বঙ্গবন্ধুর জন্মদিন ও জাতীয় শিশু দিবস উদযাপন</a></h4>
<p><span style="color: #4eace0;font-size:14px;"><i class="fa fa-calendar" aria-hidden="true"></i> 17/03/19</span>
<span style="color: #FC427B;margin-left: 1px;"><a href="http://pust.ac.bd/includes/images/news/file/birthday.pdf"><i class="fa fa-download" aria-hidden="true"></i> Download</a> </span></p>
</div>
</div>
</div>

</div>
<p style="float: right;" class="btn btn-primary"><a href="" >See All <span><i class="fa fa-arrow-right"></i></span></a></p>

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