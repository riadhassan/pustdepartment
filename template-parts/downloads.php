<?php
/**
 *Template Name: Downloads
 */
get_header();
?>
	<div id="department " style="background-image: url('<?php if ( has_post_thumbnail() ){the_post_thumbnail_url();} ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
		<div class="container">
			<div id="banner-holder" class="transparent-banner">
				<h2 id="dept-title">DOWNLOADS</h2>
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
							<h2 style="text-align: center;">Downloads</h2>

							<div style="overflow-x:auto;">
								<table class="table table-hover table-striped table-responsive">
									<thead>
									<tr>
										<th style="text-align: center;">SL</th>
										<th style="text-align: center;">Title</th>
										<th style="text-align: center;">PDF File</th>
										<th style="text-align: center;">Docx File</th>
									</tr>
									</thead>
									<tbody>

									<?php
									$downloads = get_post_meta(get_the_ID(), '_pustdep_dwnFile', true);
									$filecount = 0;
									?>
									<?php
										foreach ($downloads as $download):
											$filecount++;
									?>
									<tr>
										<td><?php echo $filecount; ?></td>
										<td><?php echo $download['_pustdep_downtitle']; ?></td>
										<td style="text-align: center;">
											<?php if('' != $download['_pustdep_downpdf']){ ?>
											<a style="color: red;" href="<?php echo $download['_pustdep_downpdf']; ?>">
												<i class="fa fa-download" aria-hidden="true"></i> Download</a>
											<?php } ?>
											</td>
										<td style="text-align: center;">
											<?php if('' != $download['_pustdep_downdoc']){ ?>
											<a target="_blank" style="color: red;" href="<?php echo $download['_pustdep_downdoc']; ?>">
												<i class="fa fa-download" aria-hidden="true"></i> Download</a>
											<?php } ?>
										</td>
									</tr>

											<?php
										endforeach;
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