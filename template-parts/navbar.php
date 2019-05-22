<div id="nav-bar">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="main-nav">

					<?php
						$pustdep_topmenu = wp_nav_menu(
							array(
								'theme-location'  => 'top-menu',
								'menu_id'   => 'top-menu',
								'menu_class' =>"",
								'container' => '',
								'echo' => false,
							)
						);

					$pustdep_topmenu = str_replace('<ul class="sub-menu">', '<div class="small-sub-nav" style="width: 50%;"><ul>', $pustdep_topmenu);
					$pustdep_topmenu = str_replace('menu-item-has-children', 'menu-item-has-children has-sub', $pustdep_topmenu);

					echo $pustdep_topmenu;
					?>
				</div>
			</div>
			<!-- End .col -->
		</div>
		<!-- End .row -->
	</div>
	<!-- End .container -->
</div>
<!-- End #nav-bar -->