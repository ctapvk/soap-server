<?php
require 'vendor/autoload.php';
$path = __DIR__ . '/server/';
$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => $path . 'wsdl/default.wsdl',
        'outputDir' => __DIR__ . '/classes/'
    ))
);