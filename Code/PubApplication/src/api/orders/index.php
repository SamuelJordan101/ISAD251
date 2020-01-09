<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../model/DbContext.php';
include_once '../../model/orders.php';

$db = new DbContext();
$response = $db->getApiData('orders');

if($response) {
    //successful JSON get
    $code = 200;
    echo JSON($response, $code);
}
else{
    //unsuccessful JSON get
    http_response_code(404);
    echo json_encode(
        array("Message" => "No orders found")
    );
}

function JSON($response, $code){
    //JSON output formatting
    header_remove();
    http_response_code($code);
    header('Content-Type: application/json');
    header('Status: '.$code);
    return json_encode(array('Code' => $code, 'Response' => $response));
}
