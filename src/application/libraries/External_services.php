<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class External_services{
        
    //------EMAILS DESDE O SRC - GMAIL------------------------------------------------------
    function send_client_contact_form($username, $useremail, $usermsg, $usercompany, $userphone){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../LEADS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'username'=>urlencode($username),
            'useremail'=>urlencode($useremail),
            'usermsg'=>urlencode($usermsg),
            'usercompany'=>urlencode($usercompany),
            'userphone'=>urlencode($userphone)
        );
        $url = "http://$worker_server_name/leads-worker/src/index.php/gmail/send_client_contact_form";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function send_recovery_pass($useremail, $username, $token, $lang){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../LEADS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'useremail'=>urlencode($useremail),
            'username'=>urlencode($username),
            'token'=>urlencode($token),
            'lang'=>urlencode($lang)
        );
        $url = "http://$worker_server_name/leads-worker/src/index.php/gmail/send_recovery_pass";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function send_number_confirm($useremail, $username, $number, $lang){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../LEADS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'useremail'=>urlencode($useremail),
            'username'=>urlencode($username),
            'number'=>urlencode($number),
            'lang'=>urlencode($lang)
        );
        $url = "http://$worker_server_name/leads-worker/src/index.php/gmail/send_number_confirm";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function send_welcome($useremail, $username, $lang){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../LEADS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'useremail'=>urlencode($useremail),
            'username'=>urlencode($username),
            'lang'=>urlencode($lang)
        );
        $url = "http://$worker_server_name/leads-worker/src/index.php/gmail/send_welcome";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function send_client_cancel_status($useremail, $username, $lang){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../LEADS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'useremail'=>urlencode($useremail),
            'username'=>urlencode($username),
            'lang'=>urlencode($lang)
        );
        $url = "http://$worker_server_name/leads-worker/src/index.php/gmail/send_client_cancel_status";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function send_client_ticket_success($useremail, $username, $ticket_url, $lang){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../LEADS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'useremail'=>urlencode($useremail),
            'username'=>urlencode($username),
            'ticket_url'=>urlencode($ticket_url),
            'lang'=>urlencode($lang)
        );
        $url = "http://$worker_server_name/leads-worker/src/index.php/gmail/send_client_ticket_success";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    //------PAGAMENTO - MUNDI------------------------------------------------------
    function create_payment($payment_data){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../LEADS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array('payment_data'=>urlencode($payment_data));
        $url = "http://$worker_server_name/leads-worker/src/index.php/payment/create_payment";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function create_boleto_payment($payment_data){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../LEADS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array('payment_data'=>urlencode($payment_data));
        $url = "http://$worker_server_name/leads-worker/src/index.php/payment/create_boleto_payment";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    
    //------PAGAMENTO - VINDI------------------------------------------------------
    function vindi_addClient($credit_card_name, $user_email){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../FOLLOWS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'credit_card_name'=>urlencode($credit_card_name),
            'user_email'=>urlencode($user_email),
        );
        $url = "http://$worker_server_name/follows-worker/src/index.php/payment/vindi_addClient";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function vindi_addClientPayment($user_id, $datas){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../FOLLOWS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'user_id'=>urlencode($user_id),
            'datas'=>urlencode(json_encode($datas)),
        );
        $url = "http://$worker_server_name/follows-worker/src/index.php/payment/vindi_addClientPayment";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function vindi_create_recurrency_payment($user_id, $pay_day, $plane_type){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../FOLLOWS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'user_id'=>urlencode($user_id),
            'pay_day'=>urlencode(json_encode($pay_day)),
            'plane_type'=>urlencode(json_encode($plane_type))
        );
        $url = "http://$worker_server_name/follows-worker/src/index.php/payment/vindi_create_recurrency_payment";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function vindi_create_payment($user_id, $prod_1real_id, $amount){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../FOLLOWS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'user_id'=>urlencode($user_id),
            'prod_1real_id'=>urlencode($prod_1real_id),
            'amount'=>urlencode($amount)
        );
        $url = "http://$worker_server_name/follows-worker/src/index.php/payment/vindi_create_payment";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
    
    function vindi_cancel_recurrency_payment($client_payment_key){
        $database_config = parse_ini_file(dirname(__FILE__) . "/../../../../FOLLOWS-LAYOUT.INI", true);
        $worker_server_name = $database_config['server']['worker_server_name'];
        $postData = array(
            'client_payment_key'=>urlencode($client_payment_key)
        );
        $url = "http://$worker_server_name/follows-worker/src/index.php/payment/vindi_cancel_recurrency_payment";
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);  
        curl_setopt($handler, CURLOPT_POST,true);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);  
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);  
        $response = curl_exec($handler);
        $info = curl_getinfo($handler);
        $string = curl_error($handler);
        curl_close($handler);
        return json_decode($response); 
    }
        
}

?> 
