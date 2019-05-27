<?php
get_header();
?>

<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
	<div class="container">
		<div id="banner-holder" class="transparent-banner">
			<h2 id="dept-title">NOTICE DETAILS</h2>
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
									<?php
									while(have_posts()){
									the_post();
									$countpost++;
									$notice_id= get_the_ID();
									$notice_meta_file = get_post_meta( $notice_id, '_dep_file', true );
									$notice_meta_date = get_post_meta($notice_id, '_dep_date', true);
									$notice_newDate = date("d-m-Y", strtotime($notice_meta_date));

									?>
									<h2 style="padding-left: 10px;"><?php esc_html(the_title()); ?></h2> <br>
									<div style="padding-left: 10px;"><i style="color: red;" class="fa fa-calendar" aria-hidden="true"></i><?php echo ' '.$notice_newDate.'   '; ?>
										<?php
										if('0'!=$notice_meta_file){
											?>
											<a style="color: red;" href="<?php echo $notice_meta_file; ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
											<?php
										}
										?>
									</div>

									<div style="overflow-x:auto;">
										<table class="table table-hover table-striped table-responsive">
											<tbody>

												<tr>
													<td>
														<?php
														if ( has_post_thumbnail() ) {
															?>
															<div class="col-md-12 p-5 form-wrap">
																<div class="col-md-12 pl-md-5 text-center mb-5">
																	<?php the_post_thumbnail( "large", array( "class" => "img-fluid" ) ); ?>
																</div>
															</div>
															<?php
														}
														?>
                                                    </td>

                                                </tr>
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
	<td>	<p class="btn btn-primary" style="text-align: center;"><i class="fa fa-arrow-left"></i><a href="<?php echo get_bloginfo('url').'/notice' ?>">Back<span></span></a></p>
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