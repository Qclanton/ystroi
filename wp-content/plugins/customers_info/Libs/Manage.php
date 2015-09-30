<?php
namespace CustomerInfo\Libs;

class Manage
{  
    // Actions
    public static function show()
    {   
        $Customers = new \CustomerInfo\Libs\Structures\Customers();
        
        // Show content
        $content = Helper::render(__DIR__ . "/../Views/Customers.php", ['customers'=>$Customers->get()]);
        echo $content;
    }
    
    
    
    
    // Install and uninstall
	public static function install() 
    {
		global $wpdb;
	
		$charset_collate = "";
		if (!empty($wpdb->charset)) {
		  $charset_collate .= "DEFAULT CHARACTER SET {$wpdb->charset}";
		}
		if (!empty($wpdb->collate)) {
		  $charset_collate .= " COLLATE {$wpdb->collate}";
		}
		
		$sql = "
			CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}customers` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
                `ip_address` varchar(64) NOT NULL,
				`visit_date` datetime NOT NULL,
                `city` varchar(255) NOT NULL,
                `browser` varchar(255) NOT NULL,
				
				PRIMARY KEY (`id`)
			) {$charset_collate}; 
		";
        
        $wpdb->query($sql);
	}
	
	public static function uninstall() 
    {
		global $wpdb;
		$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}customers");
	}
}
