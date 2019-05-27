<?php
get_header();
?>

	<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">Office Stuff Details</h2>
				<div class="breadcrumb"></div>
			</div><!-- End #banner-holder -->

			<div class="content" style="margin-bottom: 20px;">
				<div class="row">
					<div class="container-fluid">
						<div class="col-md-12 ">
							<div class="panel panel-default ">
								<div class="panel-heading"><h1 style="color: red;margin:5px;"><span style="border-right: 5px solid #FF9E1B"></span>Office Stuff Profile</h1></div>
								<div class="panel-body ">


									<div class="row">
										<?php
										while(have_posts()){
										the_post();
										$office_stuff_id= get_the_ID();
										$office_stuff_meta_designation = get_post_meta( $office_stuff_id, '_pustdep_office_designation', true );
										$office_stuff_meta_mob1 = get_post_meta($office_stuff_id, '_pustdep_office_mobile_1', true);
										$office_stuff_meta_mob2 = get_post_meta($office_stuff_id, '_pustdep_office_mobile_2', true);
										$office_stuff_meta_pabx = get_post_meta($office_stuff_id, '_pustdep_office_pabx', true);
										$office_stuff_meta_ipt = get_post_meta($office_stuff_id, '_pustdep_office_ip_telephone', true);
										$office_stuff_meta_e1 = get_post_meta($office_stuff_id, '_pustdep_office_email_1', true);
										$office_stuff_meta_e2 = get_post_meta($office_stuff_id, '_pustdep_office_email_2', true);
										?>
										<div class="row" style="margin:10px;margin-left:0px;">
											<div class="col-md-7">

												<h2><?php esc_html(the_title()); ?></h2>
												<p style="font-size: 18px;"><?php echo $office_stuff_meta_designation; ?></p>

												<h2>Contact Information</h2>
												<?php
												if('' != $office_stuff_meta_mob1) {
													?>
													<p style="margin: 0px !important;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $office_stuff_meta_mob1; ?></p>
													<?php
												}
												?>
												<?php
												if('' != $office_stuff_meta_mob2) {
													?>
													<p style="margin: 0px !important;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $office_stuff_meta_mob2; ?></p>
													<?php
												}
												?>
												<?php
												if('' != $office_stuff_meta_pabx) {
													?>
													<p style="margin: 0px !important;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $office_stuff_meta_pabx; ?></p>
													<?php
												}
												?>
												<?php
												if('' != $office_stuff_meta_ipt) {
													?>
													<p style="margin: 0px !important;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $office_stuff_meta_ipt; ?></p>
													<?php
												}
												?>
												<?php
												if('' != $office_stuff_meta_e1) {
													?>
													<p style="margin: 0px !important;"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $office_stuff_meta_e1; ?></p>
													<?php
												}
												?>
												<?php
												if('' != $office_stuff_meta_e2) {
													?>
													<p style="margin: 0px !important;"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $office_stuff_meta_e2; ?></p>
													<?php
												}
												?>




											</div>

											<div class="col-md-5">
												<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-thumbnail img-rounded img-responsive" style="width: 100%;height: 90%;">

											</div>
										</div>


										<div style="overflow-x:auto;">
											<table class="table table-hover table-striped table-responsive">
												<tbody>


												<tr>
													<td>
														<div class="col-md-12 p-5 form-wrap">
															<div class="col-md-12 pl-md-5 mb-5">
																<p>
																	<?php echo get_the_content(); ?>
																</p>
															</div>
														</div>
													</td>

												</tr>
												<tr>
													<td>	<p class="btn btn-primary" style="text-align: center;"><i class="fa fa-arrow-left"></i><a href="<?php echo get_bloginfo('url').'/office-stuff' ?>">Back<span></span></a></p>
													</td>

												</tr>
												<?php
												}
												?>

												</tbody>
											</table>
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


<?php
get_footer();