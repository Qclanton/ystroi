<?php
namespace Autoreply\Libs;

class Manage
{
    const OPTIONS_PREFIX = "autoreply_";
    const OPTIONS_LIST = "forms";
    
    
    // Actions
    public static function show()
    {   
        // Define actual action 
        $action = (isset($_POST['action']) && in_array($_POST['action'], ["show", "set"]) ? $_POST['action'] : "show");
        
        // Save new options
        if ($action === "set") {
            $optionsToStore = (isset($_POST['options']) ? $_POST['options'] : []);
            self::storeOptions($optionsToStore);
        }
        
        // Get options   
        $options = self::getStoredOptions();
        
        // Define active tab
        $options->activeTab = (isset($_COOKIE['autoreply-active-tab'])
            ? $_COOKIE['autoreply-active-tab']
            : $options->default_tab
        );           
        
        // Show content
        $content = Helper::render(__DIR__ . "/../Views/Forms.php", $options);
        echo $content;
    }
    
    
    
    
    
    // Store
    public static function storeOptions(array $options)
    {
        foreach ($options as $name=>$value) {
            if (is_array($value) || is_object($value)) {
                $value = json_encode($value);
            }
            
            update_option(self::OPTIONS_PREFIX . $name, $value);
        }   
    }
    
    public static function getStoredOptions() 
    {
        $list = explode(",", self::OPTIONS_LIST);
        $stored = [];
        
        foreach ($list as $name) {
            $value = get_option(self::OPTIONS_PREFIX . $name);
            
            $decoded = json_decode($value, true);
            if(!json_last_error()) {
                $value = $decoded;
            }
            
            $stored[$name] = self::mergeWithDefaultValues($name, $value);
        }
        
        return self::tuneOptions(Helper::toObject($stored));;
    }
    
    public static function tuneOptions($options) 
    {   
        // Set defualt tab 
        $tabs = array_keys((array)$options->forms);
        $options->default_tab = array_shift($tabs);
        
        return $options;
    }
    
    private static function mergeWithDefaultValues($name, $value)
    {
        $default = [
            'forms' => [
                'main' => ['title'=>"Главная", 'theme' => "Автоответ", 'text' => ""],
                'partner_form' => ['title'=>"Партнеры", 'theme' => "Автоответ", 'text' => ""]
            ]
        ];
        
        if (array_key_exists($name, $default)) {  
            $value = array_replace_recursive($default[$name], (array)$value);
        }

        return $value;
    }
 

    
    
    // Install and uninstall
    public static function install()
    {
        $options = explode(",", self::OPTIONS_LIST);
        
        foreach ($options as $option) {
            add_option(self::OPTIONS_PREFIX . $option);
        };        
    }
    
    public static function uninstall()
    {
        $options = explode(",", self::OPTIONS_LIST);
        
        foreach ($options as $option) {
            delete_option(self::OPTIONS_PREFIX . $option);
        }
    }
}
