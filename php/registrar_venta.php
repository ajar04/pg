<?php
$data_string = file_get_contents('php://input');
$ch = curl_init('https://tns.net.co:726/api/Pedido?empresa=88265144&usuario=ADMIN&password=F9480Q&tnsapitoken=12345&codsucursal=00');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);

$result = curl_exec($ch);
header('Content-Type: application/json');
echo $result;