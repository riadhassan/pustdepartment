<?php
/**
 *Template Name: Gallery
 */
get_header();
?>

<!--	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
	<style type="text/css">
		.gallery
		{
			display: inline-block;
			margin-top: 20px;
		}    </style>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
	</script>
</head>
<body>
<!--####
### How to add in your boostrap project
1) Add jQuery "<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>"
2) Download fancybox (https://github.com/fancyapps/fancyBox)
3) Or use CDN (http://cdnjs.com/libraries/fancybox)
####--!>

<!-- References: https://github.com/fancyapps/fancyBox -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<div id="department " style="background-image: url('<?php if ( has_post_thumbnail() ){the_post_thumbnail_url();} ?>');background-size: cover !important;background-repeat: no-repeat !important;background-attachment: fixed;">
<div class="container">
	<div id="banner-holder" class="transparent-banner">
		<h2 id="dept-title">Gallery</h2>
		<div class="breadcrumb"></div>
	</div><!-- End #banner-holder -->
	<div class="row">
		<div class='list-group gallery' >
			<?php
			$Gallery_files = get_post_meta(get_the_ID(), '_pustdep_gallery', true);
			foreach ($Gallery_files as $Gallery_file) {
				?>
				<div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' style="margin-bottom: 10px;">
					<a class="thumbnail fancybox" rel="ligthbox" href="<?php echo esc_url($Gallery_file['_pustdep_image']); ?>">
						<img style="height: 250px; width: 320px;" class="img-responsive" alt="<?php echo $Gallery_file['_pustdep_title']; ?>" src="<?php echo esc_url($Gallery_file['_pustdep_image']) ?>"/>
						<div class='text-right'>
							<small style="color: lime" class=''><?php echo $Gallery_file['_pustdep_title']; ?></small>
						</div> <!-- text-right / end -->
					</a>
				</div> <!-- col-6 / end -->
				<?php
			}
			?>
		</div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->
</div>
	<script type="text/javascript">
    $(document).ready(function(){
        //FANCYBOX
        //https://github.com/fancyapps/fancyBox
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });

</script>

<?php
get_footer();
