<?php
include '../helpers-functions/autoload.php';


$filePath = "example.txt";

$reader = new SmartTextReader();

$checker = new SmartTextChecker($reader);

$locker = new SmartTextReaderLocker($reader, "/^.*\.txt$/");


$content = $locker->read($filePath);

if (!empty($content)) {
    foreach ($content as $line) {
        echo implode('', $line) . "\n";
    }
}