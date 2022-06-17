<?php
/*------------------------------------- */
/* CREATEING DATABASE TABLE FOR PLUGIN */
/*------------------------------------- */
function DBP_tb_create2(){
    global $wpdb;
    
    //step1
    $DBP_tb_name=$wpdb->prefix ."dbp_tb_user";
    
    //Step2
    $DBP_query="CREATE TABLE $DBP_tb_name(
        username varchar (100) DEFAULT '',
        email varchar (100) DEFAULT '',
        role varchar (100) DEFAULT ''
    )";
    
    //Step3
    require_once(ABSPATH ."wp-admin/includes/upgrade.php");
    dbDelta($DBP_query);
}



?>