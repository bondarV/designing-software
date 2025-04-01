<?php

use classes\FileLogger;
use classes\FileWriter;
use classes\IFileLogger;
use classes\Logger;

include('../helpers-functions/autoload.php');

function clientCode(IFileLogger $logger) : void
{
    $logger->log('clientCode');

    $logger->error('clientCode');

    $logger->warn('clientCode');
}

$logger = new Logger();

clientCode($logger);
$fileLogger = new FileLogger(fileWriter: new FileWriter(),logger: $logger ,filePath:'./files/logging.txt');

clientCode($fileLogger);