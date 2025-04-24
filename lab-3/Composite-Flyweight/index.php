<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<?php

use observers\CollectDataListener;
use parsers\FlyWeightDocumentParser;
use parsers\MereDocumentParser;

include '../helpers-functions/autoload.php';

$bareInitialMemory = memory_get_usage();

$url = 'https://www.gutenberg.org/cache/epub/1513/pg1513.txt';
$bareParser = new MereDocumentParser();
$flyweightParser = new FlyWeightDocumentParser();

try {
    $bareRealization = new Client($url, $bareParser);
    echo $bareRealization->getMarkup();
} catch (Exception $e) {}

$bareFinalMemory = memory_get_usage();

$flyweightInitialMemory = memory_get_usage();

try {
    $flyweight = new Client($url, $flyweightParser);
    echo $flyweight->getMarkup();
} catch (Exception $e) {}

$flyweightFinalMemory = memory_get_usage();

echo "Пам'ять, що використовує дерево верстки (bare): " . ($bareFinalMemory - $bareInitialMemory) . " байт.".PHP_EOL;
echo "Пам'ять, що використовує дерево верстки (flyweight): " . ($flyweightFinalMemory - $flyweightInitialMemory) . " байт.";

$dataCollector = new CollectDataListener();
$button = new LightElementNode(new ElementVariation('button',isSelfClosing:  false));
$button->add(new LightTextNode('Click me!'));
$button->attach($dataCollector, 'click');

echo $button->getHTML();

$button->notify();
?>

</html>
