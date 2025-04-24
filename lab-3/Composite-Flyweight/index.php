<?php

use parsers\FlyWeightDocumentParser;
use parsers\MereDocumentParser;

include '../helpers-functions/autoload.php';

$bareInitialMemory = memory_get_usage();

$url = 'https://www.gutenberg.org/cache/epub/1513/pg1513.txt';
$bareParser = new MereDocumentParser();
$flyweightParser = new FlyWeightDocumentParser();

try {
    $bareRealization = new Client($url, $bareParser);
} catch (Exception $e) {}

$bareFinalMemory = memory_get_usage();

$flyweightInitialMemory = memory_get_usage();

try {
    $flyweight = new Client($url, $flyweightParser);
} catch (Exception $e) {}

$flyweightFinalMemory = memory_get_usage();

echo "Пам'ять, що використовує дерево верстки (bare): " . ($bareFinalMemory - $bareInitialMemory) . " байт.".PHP_EOL;
echo "Пам'ять, що використовує дерево верстки (flyweight): " . ($flyweightFinalMemory - $flyweightInitialMemory) . " байт.";
