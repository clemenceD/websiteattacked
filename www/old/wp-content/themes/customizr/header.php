<?php
/**
 * The Header for Customizr.
 *
 * Displays all of the <head> section and everything up till <div id="main-wrapper">
 *
 * @package Customizr
 * @since Customizr 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>                          
<!--<![endif]-->

	<?php 
		//the '__before_body' hook is used by TC_header_main::$instance->tc_head_display()
		do_action( '__before_body' ); 
	?>

	<body <?php body_class(); ?> <?php echo tc__f('tc_body_attributes' , 'itemscope itemtype="http://schema.org/WebPage"') ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NMR446"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NMR446');</script>
<!-- End Google Tag Manager -->

		<?php do_action( '__before_header' ); ?>

	   	<header class="<?php echo tc__f('tc_header_classes', 'tc-header clearfix row-fluid') ?>" role="banner">
			
			<?php 
			//the '__header' hook is used by (ordered by priorities) : TC_header_main::$instance->tc_logo_title_display(), TC_header_main::$instance->tc_tagline_display(), TC_header_main::$instance->tc_navbar_display()
				do_action( '__header' ); 
			?>

		</header>

		<?php 
		 	//This hook is filtered with the slider : TC_slider::$instance->tc_slider_display()
			do_action ( '__after_header' )
		?>
