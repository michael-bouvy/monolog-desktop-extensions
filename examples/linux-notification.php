<?php
require __DIR__ . "/../vendor/autoload.php";

$logger    = new \Monolog\Logger('Linux');
$handler   = new \Mibou\Monolog\Handler\NotifySendHandler();
$formatter = new \Mibou\Monolog\Formatter\DesktopFormatter(null, 'd/m/Y H:i:s');
$handler->setFormatter($formatter);
$logger->pushHandler($handler);

$logger->log(\Monolog\Logger::INFO, 'Hello amazing Open Source world !');
