<?php
get_header();
?>
	<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">Student Section</h2>
				<div class="breadcrumb"></div>
			</div><!-- End #banner-holder -->

			<div class="content" style="margin-bottom: 20px;">
				<div class="row">
					<div class="container-fluid">
						<div class="col-md-12 ">
							<div class="panel panel-default ">
								<div class="panel-heading"></div>
								<div class="panel-body ">


									<div class="row">
										<h2 style="text-align: center;">Student section</h2>
										<div style="overflow-x:auto;">
											<table class="table table-hover table-striped table-responsive">
												<thead>
												<tr>
													<th style="text-align: center;">SL</th>
													<th style="text-align: center;">Session</th>
													<th style="text-align: center;">Year</th>
													<th style="text-align: center;">Title</th>
													<th style="text-align: center;">View</th>
												</tr>
												</thead>
												<tbody>

												<?php
												while( have_posts()){
													the_post();
													$countpost++;
													$std_sec_id= get_the_ID();
													$notice_meta_session = get_post_meta( $std_sec_id, '_pustdep_std_session', true );
													$notice_meta_year = get_post_meta($std_sec_id, '_pustdep_std_year_semester', true);

													?>
													<tr>
														<td><?php echo $countpost; ?></td>
														<td style="text-align: center;"><i style="color: red;" class="fa fa-calendar" aria-hidden="true"></i>
															<?php echo $notice_meta_session ?>
														</td>
                                                        <td style="text-align: center;"><i style="color: red;" class="fa fa-university" aria-hidden="true"></i>
															<?php echo $notice_meta_year ?>
														</td>
														<td><a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html(the_title()); ?></a></td>
														<td style="text-align: center;">
															<a class="btn btn-success" href="<?php echo esc_url(get_permalink()); ?>">View</a>
														</td>
													</tr>

													<?php
												}
												?>

												</tbody>
											</table>
											<nav aria-label="Page navigation example" class="text-center">
												<?php pustdepartment_pagination(); ?>
											</nav>
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
