<?php
namespace CustomerInfo\Libs\Structures;

class Customers extends \CustomerInfo\Libs\Data {
	public $table = "customers";
	public $fields = [
		'id' => [
			'type' => "%d",
			'default' => null,
			'editable_fl' => false
		],
        'ip_address' => [
			'type' => "%s",
			'default' => "localhost",
			'editable_fl' => false
		],        
		'visit_date' => [
			'type' => "%s",
			'default' => "current date",
			'editable_fl' => false
		],
        'city' => [
			'type' => "%s",
			'default' => "Не определен",
			'editable_fl' => false
		],
		'browser' => [
			'type' => "%s",
			'default' => "Не определен",
			'editable_fl' => false
		]	
	];
	
	public function __construct() {
        global $wpdb;
		parent::__construct($wpdb);

		$this->default_exemplar->visit_date = date("Y-m-d H:i:s");
	}
}
?>
