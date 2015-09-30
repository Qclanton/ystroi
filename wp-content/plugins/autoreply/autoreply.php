<?php
/*
Plugin Name: Автоответ
Description: Плагин, который позволяет настроить автоматичсекие ответы на почту при отправке форм
Version: 100
Author: Anton Qcl
*/


// Autoload
spl_autoload_register(function($class) {
    // Set params
    $prefix = "Autoreply";
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
    // For tabs navigation
    wp_enqueue_script("autoreply-tabs", plugin_dir_url(__FILE__) . "Views/Js/Tabs.js", ["jquery"]);
});



// Add menu item
add_action("admin_menu", function() { 
    add_menu_page("Автоответ", "Автоответ", "edit_posts", "autoreply", ["\Autoreply\Libs\Manage", "show"], "dashicons-email", "6.2");
});



// Install and unsinstall
register_activation_hook(__FILE__, ["\Autoreply\Libs\Manager", "install"]);
register_uninstall_hook(__FILE__, ["\Autoreply\Libs\Manager", "uninstall"]);
