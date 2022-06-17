<?php

/*
    Plugin Name: Custom Plugin
	Author: Jamshed
	Version: 1.0
	Description: This is table plugin
*/




//Define absolute path to avoid direct access

if(!defined('ABSPATH')){
    define('ABSPATH', dirname(__FILE__) . '/');
}

//include database file
include_once("DBP_db_file.php");

//register hook
register_activation_hook(__FILE__,"DBP_tb_create2");

/*
    Database End
*/

//define primary path info
define('WCP_dir',dirname(__FILE__));
define('WCP_url',plugins_url('',__FILE__));


function shortcodeInit(){
    ob_start();
    //Add style Sheets
    add_action('admin_enqueue_scripts','WCP_reg_stylesheets');
    //Add js/ jQuery files
    add_action('admin_enqueue_scripts','WCP_reg_scripts');
    require_once(WCP_dir.'/assets/php_files/WCP_php_function.php');
    custom_function2();
    WCP_reg_stylesheets();
    WCP_reg_scripts();
    return ob_get_clean();
}

add_shortcode ('users_table', 'shortcodeInit')

?>