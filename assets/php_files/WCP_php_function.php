<?php


function custom_function2(){
    include_once(WCP_dir.'/assets/php_files/WCP_php_design.php'); 
    php_design();
}


//callable function in which css file will be registered
function WCP_reg_stylesheets(){
    wp_enqueue_style('WCP_cover_stylesheet','https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css',__FILE__);
    //both are in same folder
    
    wp_enqueue_style('WCP_cover_stylesheet2',WCP_url.'/assets/css/WCP_css_stylesheet.css',__FILE__);   
}



//callable function in which js/jQuery file will be registered

function WCP_reg_scripts(){
    wp_enqueue_script('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js',__FILE__);
    wp_enqueue_script('datatable','https://cdn.jsdelivr.net/npm/simple-datatables@latest',__FILE__);   
    wp_enqueue_script('WCP_js_script',WCP_url.'/assets/js/WCP_js_script.js',__FILE__);
}
?>
