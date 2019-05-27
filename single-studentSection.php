<?php
get_header();
?>

	<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">DEGREE DETAILS</h2>
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
                                        $std_sec_id= get_the_ID();
									    $std_sec_meta_session = get_post_meta( $std_sec_id, '_pustdep_std_session', true );
									    $std_sec_meta_year = get_post_meta($std_sec_id, '_pustdep_std_year_semester', true);
										$std_sec_meta_files = get_post_meta($std_sec_id, '_pustdep_std_attachment', true);

										?>
										<h2 style="padding-left: 10px;"><?php esc_html(the_title()); ?></h2> <br>
                                        <div style="padding-left: 10px;"><i style="color: red;" class="fa fa-calendar" aria-hidden="true"></i><?php echo ' Session: '.$std_sec_meta_session.'   '; ?>
                                        <i style="color: red; margin-left: 20px;" class="fa fa-university" aria-hidden="true"></i><?php echo 'Year: '.$std_sec_meta_year.'   '; ?>
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
                                                    <td>
                                                    <?php
                                                    $file_count = 0;
                                                        foreach ($std_sec_meta_files as $std_sec_meta_file){
	                                                        $file_count++;
                                                            ?>
                                                            <a class="btn btn-success" style="margin-left: 10px; margin-right: 10px;" href="<?php echo $std_sec_meta_file; ?>">Attachment <?php echo $file_count; ?><span></span></a></p>
                                                    <?php
                                                        }
                                                    ?>

													</td>

												</tr>
                                                <tr>
													<td>	<p class="btn btn-primary" style="text-align: center;"><i class="fa fa-arrow-left"></i><a href="<?php echo get_bloginfo('url').'/student-section' ?>">Back<span></span></a></p>
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