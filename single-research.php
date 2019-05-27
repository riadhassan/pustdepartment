<?php
get_header();
?>

	<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">RESEARCH DETAILS</h2>
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
										$post_id= get_the_ID();
										?>
										<h2 style="padding-left: 10px;"><?php esc_html(the_title()); ?></h2> <br>

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
                                                        <div>
                                                            <h2 style="text-align: center;"> Associate Faculty</h2>
                                                        </div>
                                                        <div class="row">
	                                                        <?php
	                                                        $Faculties = get_post_meta($post_id, _pustdep_RESEARCH_fac, true);
	                                                        foreach ($Faculties as $Facultyres) {
	                                                            $faculty_des = get_post_meta($Facultyres, '_pustdep_designation', true);
		                                                        $facultydata = get_post($Facultyres);
		                                                        $faculty_name = $facultydata -> post_title;
		                                                        ?>
                                                                <div class="col-md-4">
                                                                <div class="card" style="width: 30rem; padding: 10px 10px 10px 10px;">
                                                                    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($Facultyres); ?>" alt="Card image cap">
                                                                    <div class="card-body"><h3 class="card-title"><b><?php echo $faculty_name; ?></b></h3>
                                                                        <p class="card-text"><h3 class="card-title"><?php echo $faculty_des; ?></h3></p>
                                                                        <a href="<?php echo get_permalink($Facultyres) ?>" class="btn btn-primary">Visit Profile</a>
                                                                    </div>
                                                                </div>
                                                                </div>
		                                                        <?php
	                                                        }
	                                                        ?>
                                                        </div>
                                                    </td>
                                                </tr>
												<tr>
													<td>	<p class="btn btn-primary" style="text-align: center;"><i class="fa fa-arrow-left"></i><a href="<?php echo get_bloginfo('url').'/research' ?>">Back<span></span></a></p>
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