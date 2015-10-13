<?php
namespace RepairCalculator\Libs;

class Manage
{
    const OPTIONS_PREFIX = "repair_calculator_";
    const OPTIONS_LIST = "type_coefficient,form_text,formulas";
    
    
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
        
        // Show content
        $content = Helper::render(__DIR__ . "/../Views/Calculator.php", $options);
        echo $content;
    }
    
    public static function showForm()
    {
        // Get options   
        $options = self::getStoredOptions();
                     
        echo Helper::render(__DIR__ . "/../Views/Form.php", $options);
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
        return $options;
    }
    
    private static function mergeWithDefaultValues($name, $value)
    {
        $default = [
            'type_coefficient' => [
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '4' => 4
            ],
            'form_text' => [
                '1' => "Косметический ремонт от 4 000 руб",
                '2' => "Капитальный ремонт (эконом) от 5 000 руб",
                '3' => "Капитальный ремонт (стандарт) от 6 000 руб",
                '4' => "Евро ремонт от 7 500 руб"
            ],
            'formulas' => [
                'materials' => "{{type_coefficient}}*{{area}}*10000",
                'summary' => "{{type_coefficient}}*{{area}}*10000*2"
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
