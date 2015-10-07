<?php
/*
Plugin Name: Калькулятор расчета стоимости ремонта
Description: Плагин, который позволяет задавать формулы расчета стоимости ремонта
Version: 100
Author: Anton Qcl
*/


// Autoload
spl_autoload_register(function($class) {
    // Set params
    $prefix = "RepairCalculator";
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



// Add menu item
add_action("admin_menu", function() { 
    add_menu_page("Калькулятор ремонта", "Калькулятор ремонта", "edit_posts", "repair_calculator", ["\RepairCalculator\Libs\Manage", "show"], "dashicons-forms", "6.4");
});



// Install and unsinstall
register_activation_hook(__FILE__, ["\RepairCalculator\Libs\Manager", "install"]);
register_uninstall_hook(__FILE__, ["\RepairCalculator\Libs\Manager", "uninstall"]);
