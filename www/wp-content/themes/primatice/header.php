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

</head>

<body class="blog-body">
