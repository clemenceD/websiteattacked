<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package firebrick
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="shortcut icon" href="/wp-content/themes/primatice/img/favicon.ico" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php
    if (isset($themebucket_firebrick['custom_css'])) echo $themebucket_firebrick['custom_css'];
    if (isset($themebucket_firebrick['custom_ga'])) echo $themebucket_firebrick['custom_ga'];
    ?>

    <?php wp_head(); ?>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NMR446"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NMR446');</script>
<!-- End Google Tag Manager -->

</head>

<body class="blog-body">
