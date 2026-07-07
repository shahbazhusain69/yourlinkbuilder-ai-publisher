<?php
/*
Plugin Name: YourLinkBuilder AI Publisher
Description: AI publishing endpoint (skeleton).
Version: 0.1.0
*/
if(!defined('ABSPATH')) exit;
define('YLB_AI_DIR', plugin_dir_path(__FILE__));
foreach(['api','auth','helpers','logger','post','seo'] as $f){
  require_once YLB_AI_DIR.'includes/'.$f.'.php';
}
