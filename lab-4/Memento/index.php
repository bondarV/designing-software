<?php
include '../helpers-functions/autoload.php';

$document = new TextDocument("Hello, world!");
$editor = new TextEditor($document);

echo $document->getContent() . PHP_EOL;

$document->setContent("SHEEEESH");
$editor->save();

echo $document->getContent() . PHP_EOL;

$editor->undo();
echo $document->getContent() . PHP_EOL;