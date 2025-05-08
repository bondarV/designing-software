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

include '../helpers-functions/autoload.php';
$body = new LightElementNode(new ElementVariation('body','block',false));
//
//include 'functions/strategyUsage.php';
//
//include 'functions/flyweightUsage.php';
//include 'functions/observerUsage.php';
//runStrategyExample();

$tag = new LightElementNode(elementVariation: ElementFactory::getFlyweight('img',isSelfClosing: true), cssClasses: ['padding'=>'10px','margin'=>'1000px','font-size'=>''], tagAttributes: ['src'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png']);

echo $tag->getHTML();

?>

</html>
