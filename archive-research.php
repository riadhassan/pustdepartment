<?php
get_header();
?>
	<div id="department " style="background-image: url('<?php echo get_template_directory_uri().'/asset/image/background.jpg'; ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">ALL RESEARCH</h2>
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
										<h2 style="text-align: center;">Research</h2>
											<div class="row">
												<?php
												while(have_posts()) {
													the_post()
													?>
													<div class="col-md-4">
														<div class="thumbnail hovereffect">
															<a href="<?php echo esc_url( get_permalink() ); ?>">
																<?php
																if(has_post_thumbnail()) {
																	?>
																	<img  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="degree" style="width:100%" class="img-fluid">
																	<?php
																}
																?>
																<div class="overlay">
																	<p class="text"></p>
																</div>
																<div class="caption" style="border-top: 1px solid black;">
																	<p ><b><a href="<?php echo esc_url( get_permalink() ); ?>"><p style="text-align: center;"><?php esc_html( the_title() ); ?></p></a></b></p>
																</div>
															</a>
														</div>
													</div>
													<?php
												}
												?>


											</div>
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


<?php
get_footer();