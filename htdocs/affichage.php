<?php


// require("model\business/fromage.php");/
// require("model/business/membre.php");
// require("model/business/pays.php");
// require("model/business/avis.php");
require_once 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use model\business\fromage;

// create a log channel
$log = new Logger('logs');
$log->pushHandler(new StreamHandler(__DIR__.'\logs.log', Logger::WARNING));

// add records to the log
$log->addWarning('Foo');
$log->addError('Bar');
echo "test";
