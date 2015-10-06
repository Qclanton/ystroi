<?php
// Enable thumbnails
if (function_exists("add_theme_support")) {	
    add_theme_support("post-thumbnails"); 
}

// Disable admin bar
show_admin_bar(false);

// Menu Section
if (function_exists("register_nav_menus")) { 
	add_action("init", function() {
		register_nav_menus([
			'top-menu' => "Top Menu",
			'main-menu' => "Main Menu",
			'footer_menu' => "Footer Menu"
		]);
	});
}






// Helper for load template parts
function render_template_part($slug, array $data = []){
    $slug .= ".php";
    extract($data);
 
 	ob_start();		
	require locate_template($slug);
	$content = ob_get_contents();
	ob_end_clean();
    
    return  $content;
}






// Helper of home detection
function get_site_url_root() {
	$protocol = (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off' || empty($_SERVER['HTTPS']) ? 'http://' : 'https://');
	$name = $_SERVER['SERVER_NAME'];
	
	return $protocol . $name;
}

function get_site_subfolder() {
	$url_root = get_site_url_root();
	$site_address = get_site_url();
	$subfolder = str_replace($url_root, '', $site_address);
	
	return $subfolder;	
}

function is_home_qs() {
    return (($_SERVER['QUERY_STRING'] == '') ? true : false);
}

function is_home_ru() {
	$request_uri = str_replace(get_site_subfolder(), '', $_SERVER['REQUEST_URI']);
	
    return (in_array($request_uri, array('/index.php/', '/')) ? true : false);
}

function is_home_tmpl() {
    return (is_home_qs() && is_home_ru() ? true: false);
}





// Router
function define_template_part() {
	return is_home_tmpl() && get_option("show_on_front") == "page" ? "main" : "content";
}





// Script loader
add_action("wp_enqueue_scripts", function() {
	wp_enqueue_script("jquery");
	
    // Styles
    wp_enqueue_style("slides", get_template_directory_uri() . "/css/slider.css" );
    
    // Enqueue libs
    wp_enqueue_script("lib-anchors", get_template_directory_uri() . "/js/libs/anchors.js");
    wp_enqueue_script("lib-arcticmodal", get_template_directory_uri() . "/js/jquery.arcticmodal-0.3.min.js");    
    
    
    // Enqueue handlers
    wp_enqueue_script("required-fields-controller", get_template_directory_uri() . "/js/handlers/requiredFieldsController.js");
    wp_enqueue_script("files-buttons-handler", get_template_directory_uri() . "/js/handlers/filesButtonsHandler.js");
    wp_enqueue_script("to-top-scroller", get_template_directory_uri() . "/js/handlers/toTopScroller.js");
    wp_enqueue_script("main-form-sender", get_template_directory_uri() . "/js/handlers/mainFormSender.js");
    wp_enqueue_script("callback-form-sender", get_template_directory_uri() . "/js/handlers/callbackFormSender.js");
    wp_enqueue_script("partner-form-sender", get_template_directory_uri() . "/js/handlers/partnerFormSender.js");
    
    // Addtitional scripts for main page
    if (define_template_part() == "main") {
        // Enqueue libs
        wp_enqueue_script("lib-carousel", get_template_directory_uri() . "/js/libs/carousel.js");        
        wp_enqueue_script("lib-browser-definer", get_template_directory_uri() . "/js/libs/browserDefiner.js");
                
        // Enqueue handlers
        wp_enqueue_script("free-form-sender", get_template_directory_uri() . "/js/handlers/freeFormSender.js");
        wp_enqueue_script("sketch-offer-button-handler", get_template_directory_uri() . "/js/handlers/sketchOfferButtonHandler.js");        
        wp_enqueue_script("free-offer-popup", get_template_directory_uri() . "/js/handlers/freeOfferPopup.js");        
        wp_enqueue_script("info-collector", get_template_directory_uri() . "/js/handlers/infoCollector.js");
        wp_enqueue_script("video-fullsize-controller", get_template_directory_uri() . "/js/handlers/videoFullsizeController.js");
        wp_enqueue_script("how-it-works-button-handler", get_template_directory_uri() . "/js/handlers/howItWorksButtonHandler.js");  
	}    
});






// Date generator
function defineDate() {
    $russian_months = [
        "января",
        "февраля",
        "марта",
        "апреля",
        "мая",
        "июня",
        "июля",
        "августа",
        "сентября",
        "октября",
        "ноября",
        "декабря"
    ];
    
    $day = date("d");
    $month = $russian_months[date("n")-1];
    $year = date("Y");
    
    return  "{$day} {$month} {$year}";
}






// Info about user
function defineIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }


    return $ip;
}

function defineCity() {
    $ip = defineIp();
    $city = "Не опредлен";
    $api_url = "https://api.sypexgeo.net/json/";
    
    
    // Set query settings
    $query_settings = stream_context_create([
        'http'=> [
            'timeout' => 5
        ]        
    ]);
    
    
    // Make the query to API
    $api_answer = file_get_contents($api_url . $ip, false, $query_settings);

    if (empty($api_answer)) {
        return $city;
    }
    
    
    // Try to decode
    $ip_info = json_decode($api_answer);
    
    if (json_last_error()) {
        return $city;
    }
    
   
    
    // Try to extract info about the city name
    if (!empty($ip_info->city->name_ru)) {
        $city = $ip_info->city->name_ru;
    }
    
    
    return $city;    
}

function defineBrowser() {
    $browser = "Не определен";
    
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== false) {
        $browser = "Edge";
    } elseif(
        strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false ||
        strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false
    ) {
        $browser = "Internet Explorer";
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false) {
        $browser = "Mozilla Firefox";
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false) {
        $browser = "Google Chrome";
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false) {
        $browser = "Opera";
    } elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false) {
        $browser = "Safari";
    }


    return $browser;
}

// Save data about user
function collectInfo($city=null, $browser=null) {
    // Check dependencies
    if (!class_exists("\\CustomerInfo\\Libs\\Structures\\Customers")) {
        return false;
    }
    
    
    
    // Create customer
    $customer = (object)[
        'ip_address' => defineIp(),
        'visit_date' => date("Y-m-d H:i:s"),
        'city' => (!empty($city) ? $city : defineCity()),
        'browser' => (!empty($browser) ? $browser : defineBrowser()),
    ];
    
    
    
    // Save customer
    $Customers = new \CustomerInfo\Libs\Structures\Customers();
    $result = $Customers->set($customer);

    return $result;
}

// Save data thru AJAX
function collectInfoAjax() {
    $city = (isset($_POST['city']) ? $_POST['city'] : null);
    $browser = (isset($_POST['browser']) ? $_POST['browser'] : null);
    
    die(collectInfo($city, $browser));
}    

add_action("wp_ajax_nopriv_collect_info", "collectInfoAjax");
add_action("wp_ajax_collect_info", "collectInfoAjax");





// Minor forms
function sendAutoReply($form_name, $receiver) {
    // Check dependencies
    if (!class_exists("\\Autoreply\\Libs\\Manage")) {
        return false;
    }    
    
    
    
    // Retrieve options
    $options = \Autoreply\Libs\Manage::getStoredOptions();

    if (!isset($options->forms->{$form_name})) {
       return false;
    }
    
   

    
    // Set params for mail
    $form = $options->forms->{$form_name};
    $from = get_option("admin_email");
    $to = $receiver;
    $subject = stripcslashes($form->theme);
    $message = stripcslashes($form->text);
    
   
    
    // Activate possibility to use HTML in letter
    add_filter("wp_mail_content_type", function() { 
        return "text/html";
    });
    
    
    
    // Create headers
    $headers[] = "From: asda <{$from}>";



    // Send mail
    $result = wp_mail($to, $subject, $message, $headers);



    // Set default settings to other functions
	remove_filter("wp_mail_content_type", function() { 
        return "text/html";
    });
    
    
    
    // Return sending result
    return $result;
}

function sendMinorForm($form_name, array $data) {
    // Activate possibility to use HTML in letter
    add_filter("wp_mail_content_type", function() { 
        return "text/html";
    });
    
    
    
    // Define properties
    $site = get_option("blogname");
    $name = (isset($data['name']) ? $data['name']: "Системное уведомление");
    $from = (isset($data['email']) && isset($data['name']) ? $data['email']: get_option("admin_email"));
    $to = get_option("admin_email");
    
    
    
    
    // Define form title
    $form_title = "Неизвестная";
    
    if ($form_name == "partner_form") {
        $form_title = "Партнеры";
    } elseif ($form_name == "callback_form") {
        $form_title = "Обратный звонок";
    } elseif ($form_name == "main-free") {
        $form_title = "Бесплатный рассчет с экспертом";
    }


    
    
    // Create text
    $subject = "Клиент воспользовался формой \"{$form_title}\" на сайте \"{$site}\"";
    
    $message = "
Здравствуйте!
Клиент воспользовался формой \"{$form_title}\" на сайте \"{$site}.
<br>
Данные клиента:
<br><br>
<table style='border: solid 1px'>
    <thead>
        <tr>
            <th style='border: solid 1px'>Поле</th>
            <th style='border: solid 1px'>Значение</th>
        </tr>
    </thead>
    
    
    <tbody>
";
    
    foreach ($data as $field=>$value) {
        $message .= "
        <tr>
            <td style='border: solid 1px'>{$field}</td>
            <td style='border: solid 1px'>{$value}</td>
        </tr>";
    }
    
    $message .= "
    </tbody>
</table>
";



    // Create headers
    $headers[] = "From: {$name} <{$from}>";



    // Send mail
    $result = wp_mail($to, $subject, $message, $headers);



    // Set default settings to other functions
	remove_filter("wp_mail_content_type", function() { 
        return "text/html";
    });
    
    
    
    // Return sending result
    return $result;
}





// Send callback form thru AJAX
function sendCallbackFormAjax() {
    if (!isset($_POST['callback_form'])) {
        die(0);
    }
    
    die(sendMinorForm("callback_form", $_POST['callback_form']));
}    

add_action("wp_ajax_nopriv_send_callback_form", "sendCallbackFormAjax");
add_action("wp_ajax_send_callback_form", "sendCallbackFormAjax");

// Send partner form thru AJAX
function sendPartnerFormAjax() {
    if (!isset($_POST['partner_form']) || !isset($_POST['partner_form']['email'])) {
        die("0");
    }
    
    
    // Send data to admin
    $result = sendMinorForm("partner_form", $_POST['partner_form']);
    
    
    // Reply to partner
    if ($result) {
        $result = sendAutoReply("partner_form", $_POST['partner_form']['email']);
    }
    
    
    // Return result
    die((string)$result);
}    

add_action("wp_ajax_nopriv_send_partner_form", "sendPartnerFormAjax");
add_action("wp_ajax_send_partner_form", "sendPartnerFormAjax");

// Send free form thru AJAX
function sendFreeFormAjax() {
    if (!isset($_POST['main-free']) || !isset($_POST['main-free']['email'])) {
        die("0");
    }
    
    
    // Send data to admin
    $result = sendMinorForm("main-free", $_POST['main-free']);
    
    
    // Reply to partner
    if ($result) {
        $result = sendAutoReply("main-free", $_POST['main-free']['email']);
    }
    
    
    // Return result
    die((string)$result);
}    

add_action("wp_ajax_nopriv_send_free_form", "sendFreeFormAjax");
add_action("wp_ajax_send_free_form", "sendFreeFormAjax");






// Main form
function sendMainForm(array $data) {
    // Activate possibility to use HTML in letter
    add_filter("wp_mail_content_type", function() { 
        return "text/html";
    });
    
    
    // Define properties
    $site = get_option("blogname");
    $name = (isset($data['name']) ? $data['name']: "Системное уведомление");
    $from = (isset($data['email']) && isset($data['name']) ? $data['email']: get_option("admin_email"));
    $to = get_option("admin_email");
    
    
    
    // Attach files
    $attachments = [];

    foreach ($_FILES as $file) {
        // Save file
        $file_name = WP_CONTENT_DIR . "/uploads/" . basename($file['name']);
        move_uploaded_file($file['tmp_name'], $file_name);
        
        // Set file as attachment
        $attachments[] = $file_name;   
    }
    
    
    
    // Define form title
    $form_title = "Главная";

    
    
    // Create text
    $subject = "Клиент воспользовался формой \"{$form_title}\" на сайте \"{$site}\"";
    
    $message = "
Здравствуйте!
Клиент воспользовался формой \"{$form_title}\" на сайте \"{$site}.
<br>
Данные клиента:
<br><br>
<table style='border: solid 1px'>
    <thead>
        <tr>
            <th style='border: solid 1px'>Поле</th>
            <th style='border: solid 1px'>Значение</th>
        </tr>
    </thead>
    
    
    <tbody>
";
    
    foreach ($data as $field=>$value) {
        $message .= "
        <tr>
            <td style='border: solid 1px'>{$field}</td>
            <td style='border: solid 1px'>{$value}</td>
        </tr>";
    }
    
    $message .= "
    </tbody>
</table>
";



    // Create headers
    $headers[] = "From: {$name} <{$from}>";



    // Send mail
    $result = wp_mail($to, $subject, $message, $headers, $attachments);



    // Set default settings to other functions
	remove_filter("wp_mail_content_type", function() { 
        return "text/html";
    });
    
    
    
    // Remove sended files
    foreach ($attachments as $attachment) {
        unlink($attachment);
    }
    
    
    
    // Return sending result
    return $result;
}

// Send main form thru AJAX
function sendMainFormAjax() {
    if (!isset($_POST['main'])) {
        die("0");
    }

    // Return result
    die((string)sendMainForm($_POST['main']));
}

add_action("wp_ajax_nopriv_send_main_form", "sendMainFormAjax");
add_action("wp_ajax_send_main_form", "sendMainFormAjax");
