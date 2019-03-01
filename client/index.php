<?php
require $_SERVER['DOCUMENT_ROOT'] . '/classes/autoload.php';

$client = new EsiaUslService([
    'trace' => true,
    'exception' => true,
    'cache_wsdl' => WSDL_CACHE_NONE,
]);
var_dump($client->__getFunctions());

$ip = new InputParams(
    "fan", "fan", "fan", "fan", "123"
);
$ip->setOt('ads');

echo "try to sendSms";
$response = $client->sendSms($ip);
var_dump($response);
die('finish');
