<?php
get_header();
?>

	<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">Faculty Details</h2>
				<div class="breadcrumb"></div>
			</div><!-- End #banner-holder -->

			<div class="content" style="margin-bottom: 20px;">
				<div class="row">
					<div class="container-fluid">
						<div class="col-md-12 ">
							<div class="panel panel-default ">
								<div class="panel-heading"><h1 style="color: red;margin:5px;"><span style="border-right: 5px solid #FF9E1B"></span>Faculty Profile</h1></div>
								<div class="panel-body ">


									<div class="row">
										<?php
										while(have_posts()){
										the_post();
										$faculty_id= get_the_ID();
										$faculty_meta_designation = get_post_meta( $faculty_id, '_pustdep_designation', true );
										$faculty_meta_dep = get_post_meta($faculty_id, '_pustdep_department', true);
										$faculty_meta_campus = get_post_meta($faculty_id, '_pustdep_campus', true);
										$faculty_meta_mob1 = get_post_meta($faculty_id, '_pustdep_mobile_1', true);
										$faculty_meta_mob2 = get_post_meta($faculty_id, '_pustdep_mobile_2', true);
										$faculty_meta_pabx = get_post_meta($faculty_id, '_pustdep_pabx', true);
										$faculty_meta_ipt = get_post_meta($faculty_id, '_pustdep_ip_telephone', true);
										$faculty_meta_e1 = get_post_meta($faculty_id, '_pustdep_email_1', true);
										$faculty_meta_e2 = get_post_meta($faculty_id, '_pustdep_email_2', true);
										$faculty_meta_researches = get_post_meta($faculty_id, '_pustdep_facu_research', true);


										?>
										<div class="row" style="margin:10px;margin-left:0px;">
											<div class="col-md-7">

												<h2><?php esc_html(the_title()); ?></h2>
												<p style="font-size: 18px;"><?php echo $faculty_meta_designation; ?></p>
												<p style="font-size: 14px;line-height:12px;"><?php echo $faculty_meta_dep; ?></p>
												<p style="font-size: 14px;line-height:12px;"><?php echo $faculty_meta_campus; ?></p>

												<h2>Contact Information</h2>
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

                                                                <ul>
																	<?php
																	if(''!=$faculty_meta_researches){
																		?>
                                                                        <h2>On Going Research</h2>
                                                                        <div>
																			<?php
																			foreach ($faculty_meta_researches as $faculty_meta_research){
																				$post_id_res = $faculty_meta_research;
																				$queried_post = get_post($post_id_res);
																				$res_title = $queried_post->post_title;
																				$res_url =  get_permalink($faculty_meta_research);
																				?>
                                                                                <div class="col-md-3">
                                                                                    <div class="thumbnail hovereffect">
                                                                                        <a href="<?php echo esc_url( get_permalink($faculty_meta_research) ); ?>">
																							<?php
																							if(has_post_thumbnail($faculty_meta_research)) {
																								?>
                                                                                                <img  src="<?php echo get_the_post_thumbnail_url($faculty_meta_research); ?>" alt="research" style="width:100%" class="img-fluid">
																								<?php
																							}
																							?>
                                                                                            <div class="overlay">
                                                                                                <p class="text"></p>
                                                                                            </div>
                                                                                            <div class="caption" style="border-top: 1px solid black;">
                                                                                                <p ><b><a href="<?php echo esc_url( get_permalink($faculty_meta_research) ); ?>"><h style="text-align: center;"><?php echo $res_title; ?></h></a></b></p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
																				<?php
																			}
																			?>
                                                                        </div>
																		<?php
																	}
																	?>
                                                                </ul>
                                                                <p>
																	<?php echo get_the_content(); ?>
                                                                </p>
                                                            </div>
                                                        </div>
													</td>

												</tr>
												<tr>
													<td>	<p class="btn btn-primary" style="text-align: center;"><i class="fa fa-arrow-left"></i><a href="<?php echo get_bloginfo('url').'/teacher' ?>">Back<span></span></a></p>
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