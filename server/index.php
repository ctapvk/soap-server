<?php
if (isset($_GET['wsdl'])) {
    header("Content-Type: text/xml; charset=utf-8");
    $wsdl = __DIR__ . '/wsdl/' . 'default.wsdl';
    die(file_get_contents($wsdl));
}
//header("Content-Type: text/xml; charset=utf-8");
header("Content-Type: text/html; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: ' . date('r'));

ini_set("soap.wsdl_cache_enabled", "0"); // отключаем кеширование WSDL-файла для тестирования

require 'SoapSmsGateWay.class.php';

//Создаем новый SOAP-сервер
$server = new SoapServer("http://{$_SERVER['HTTP_HOST']}/server/?wsdl");
//Регистрируем класс обработчик
$server->setClass("SoapSmsGateWay");
//Запускаем сервер
$server->handle();
