<?php
/*
Plugin Name: Информация о заказчике
Description: Плагин, выводящий информацию о потенциальных заказчиках
Version: 100
Author: Anton Qcl
*/


// Autoload
spl_autoload_register(function($class) {
    // Set params
    $prefix = "CustomerInfo";
    $base_dir = __DIR__;

    // Check namespace
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // Get the file
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace("\\", "/", $relative_class) . ".php";
    
    
    // Require file
    if (file_exists($file)) {
        require $file;
    }
});



// Enqueue Javascript files
add_action("admin_enqueue_scripts", function() {
    wp_enqueue_style("style-customers", plugin_dir_url(__FILE__) . "Views/Css/Customers.css" );
    
    wp_enqueue_script("lib-data-tables", plugin_dir_url(__FILE__) . "Views/Js/Libs/jquery.dataTables.min.js", ["jquery"]);
    wp_enqueue_script("customers-table", plugin_dir_url(__FILE__) . "Views/Js/table.js");    
});



// Add menu item
add_action("admin_menu", function() { 
    add_menu_page("Заказчики", "Заказчики", "edit_posts", "customers", ["\CustomerInfo\Libs\Manage", "show"], "dashicons-universal-access", "6.3");
});



// Install and unsinstall
register_activation_hook(__FILE__, ["\CustomerInfo\Libs\Manager", "install"]);
register_uninstall_hook(__FILE__, ["\CustomerInfo\Libs\Manager", "uninstall"]);
