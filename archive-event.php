<?php
get_header();
?>
	<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">ALL EVENT</h2>
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
										<h2 style="text-align: center;">Event</h2>

										<div style="overflow-x:auto;">
											<table class="table table-hover table-striped table-responsive">
												<thead>
												<tr>
													<th style="text-align: center;">SL</th>
													<th style="text-align: center;">Event Date</th>
													<th style="text-align: center;">Title</th>
													<th style="text-align: center;">Download</th>
												</tr>
												</thead>
												<tbody>

												<?php
												$countpost = 0;
												while(have_posts()){
													the_post();
													$countpost++;
													$event_id= get_the_ID();
													$event_meta_file = get_post_meta( $event_id, '_dep_file', true );
													$event_meta_date = get_post_meta($event_id, '_dep_date', true);
													$event_newDate = date("d-m-Y", strtotime($event_meta_date));

													?>
													<tr>
														<td><?php echo $countpost ?></td>
														<td style="text-align: center;"><i style="color: red;"
														                                   class="fa fa-calendar"
														                                   aria-hidden="true"></i>
															<?php echo $event_newDate ?>
														</td>
														<td><a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html(the_title()); ?></a></td>
														<td style="text-align: center;">
															<?php
															if('0'!=$event_meta_file){
																?>
																<a style="color: red;" href="<?php echo $event_meta_file; ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
																<?php
															}
															?>
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