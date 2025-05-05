<?php

use parsers\FlyWeightDocumentParser;
use parsers\MereDocumentParser;

$bareInitialMemory = memory_get_usage();

$url = 'https://www.gutenberg.org/cache/epub/23450/pg23450.txt';
$bareParser = new MereDocumentParser();
$flyweightParser = new FlyWeightDocumentParser();


$bareRealization = new Client($url, $bareParser);
$html = $bareRealization->getMarkup();
echo $html;

$bareFinalMemory = memory_get_usage();

$flyweightInitialMemory = memory_get_usage();


$flyweight = new Client($url, $flyweightParser);
echo $flyweight->getMarkup().PHP_EOL;
$flyweightFinalMemory = memory_get_usage();

echo "Пам'ять, що використовує дерево верстки (bare): " . ($bareFinalMemory - $bareInitialMemory) . " байт." . PHP_EOL;
echo "Пам'ять, що використовує дерево верстки (flyweight): " . ($flyweightFinalMemory - $flyweightInitialMemory) . " байт.";
