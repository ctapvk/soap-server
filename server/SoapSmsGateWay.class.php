<?php
require $_SERVER['DOCUMENT_ROOT'] . '/classes/autoload.php';

class SoapSmsGateWay
{

    public function sendSms($messagesData)
    {
        $this->log(__METHOD__, $messagesData);
        $usl = new Usl("123", "123", "123", "123",
            "123", "123", "123", "123", "123");
        return array($usl);
    }

    public function log($name, $arguments)
    {
        $rawPost = "\r\n\r\n--- >> call $name from {$_SERVER['REMOTE_ADDR']} << --\r\ndate: " . date('c') . "\r\n";
        $rawPost .= file_get_contents('php://input');
        $rawPost .= "\r\n---messageData:\r\n";
        $rawPost .= serialize($arguments);
//        $rawPost .= print_r($_SERVER,true);
        file_put_contents(__DIR__ . "/req.log", $rawPost, FILE_APPEND);
    }


}
