<?php
get_header();
?>
	<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">Student Section</h2>
			</div><!-- End #banner-holder -->

			<div class="content" style="margin-bottom: 20px; padding-left:60px;">
				<div class="row">
					<div class="container-fluid">
						<div class="col-md-12 ">
							<div class="panel panel-default ">
								<div class="panel-heading">
									<p style="color: #575fcf;">Student Section | Department of <?php echo get_bloginfo('description') ?></p>
								</div>


								<h2 style="margin:10px;border-bottom: 1px dashed #596275;"><i class="fa fa-hand-o-right" aria-hidden="true"></i>Student Section | Faculty</h2>
								<?php
								$args_faulty = array(
									'post_type'   => 'teacher',
									'post_status' => 'publish',
									'posts_per_page' => -1,
								);
								$department_faulty = new WP_Query( $args_faulty );
								$count =0;
								?>
								<?php
								while($department_faulty -> have_posts()) {
									$department_faulty -> the_post();
									$faculty_id=get_the_ID();
									$faculty_meta_designation = get_post_meta( $faculty_id, '_pustdep_designation', true );
									$faculty_meta_qualification = get_post_meta( $faculty_id, '_pustdep_qualification', true );
									$faculty_meta_res = get_post_meta( $faculty_id, '_pustdep_rese_area', true );
									$faculty_meta_dep = get_post_meta($faculty_id, '_pustdep_department', true);
									$faculty_meta_campus = get_post_meta($faculty_id, '_pustdep_campus', true);
									$faculty_meta_mob1 = get_post_meta($faculty_id, '_pustdep_mobile_1', true);
									$faculty_meta_mob2 = get_post_meta($faculty_id, '_pustdep_mobile_2', true);
									$faculty_meta_pabx = get_post_meta($faculty_id, '_pustdep_pabx', true);
									$faculty_meta_ipt = get_post_meta($faculty_id, '_pustdep_ip_telephone', true);
									$faculty_meta_e1 = get_post_meta($faculty_id, '_pustdep_email_1', true);
									$faculty_meta_e2 = get_post_meta($faculty_id, '_pustdep_email_2', true);
									$faculty_meta_researches = get_post_meta($faculty_id, '_pustdep_facu_research', true);
									$faculty_meta_slug = get_post_meta($faculty_id, '_pustdep_userslag', true);
									?>


									<div class="col-md-4 to_profile">
										<div class="details">
											<div class="book" style="height:250px !important;">

												<div class="back">

												</div>
												<div class="page6">
													<ul class="social">
														<p style="margin: 0px !important;color: #f53b57;"><b>Contact Details</b></p>
														<?php
														if('' != $faculty_meta_mob1) {
															?>
															<p style="margin: 0px !important;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $faculty_meta_mob1; ?></p>
															<?php
														}
														?>
														<?php
														if('' != $faculty_meta_mob2) {
															?>
															<p style="margin: 0px !important;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $faculty_meta_mob2; ?></p>
															<?php
														}
														?>
														<?php
														if('' != $faculty_meta_pabx) {
															?>
															<p style="margin: 0px !important;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $faculty_meta_pabx; ?></p>
															<?php
														}
														?>
														<?php
														if('' != $faculty_meta_ipt) {
															?>
															<p style="margin: 0px !important;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $faculty_meta_ipt; ?></p>
															<?php
														}
														?>
														<?php
														if('' != $faculty_meta_e1) {
															?>
															<p style="margin: 0px !important;"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $faculty_meta_e1; ?></p>
															<?php
														}
														?>
														<?php
														if('' != $faculty_meta_e2) {
															?>
															<p style="margin: 0px !important;"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $faculty_meta_e2; ?></p>
															<?php
														}
														?>
													</ul>
												</div>
												<div class="page5" style="line-height: normal;">
													<p style="color: red;font-weight: bold;">Personal Information </p>
													<img width="60" height="60" src="<?php echo get_the_post_thumbnail_url() ?>">
													<p style="font-size:12px;margin:0px;line-height:normal;"><b>Qualification:</b>
													</p>
													<p style="margin:0px;text-align: center;width: 190px;margin-left: 10px;font-size:11px;color:#000000;"><?php echo $faculty_meta_qualification; ?> </p>
													<p style="font-size:12px;margin:0px;line-height:normal;"><b>Research Area:</b></p>
													<p style="margin:0px;text-align: center;width: 190px;margin-left: 10px;font-size:11px;color:#000000;"> <?php echo $faculty_meta_res; ?></p>
												</div>
												<div class="page4"></div>
												<div class="page3"></div>
												<div class="page2"></div>
												<div class="page1"></div>
												<div class="front">
													<img style="width:100%;" src="<?php echo get_the_post_thumbnail_url(); ?>">
												</div>
											</div>
											<h4 style="color: #000;" class="">
												<a href="http://pust.ac.bd/academic/departments/dept_teachers/dept_teachers_profile/100071"><?php the_title(); ?><br>
													<span><?php echo $faculty_meta_designation; ?></a></span>
											</h4>
											<a href="<?php echo $faculty_meta_slug; ?>" class="btn btn-info">Student Section</a>
										</div>

									</div>


									<?php
								}
								?>
								<div class="clearfix"></div>

							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
	</div>

<?php
get_footer();
