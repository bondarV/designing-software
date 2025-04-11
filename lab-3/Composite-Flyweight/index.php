<?php
include '../helpers-functions/autoload.php';
$initialMemory = memory_get_usage();

$factory = new ElementFactory([['body', 'block', 'false'],
    ['h1', 'block', 'false'],
    ['h2', 'block', 'false'],
    ['blockquote', 'block', 'false'],
    ['p', 'block', 'false']
]);

$bodyBlockTag = $factory->getFlyweight('body');
$h1BlockTag = $factory->getFlyweight('h1');
$h2BlockTag = $factory->getFlyweight('h2');
$blockQuoteTag = $factory->getFlyweight('blockquote');
$paragraphBlockTag = $factory->getFlyweight('p');


$body = new LightElementNode(elementVariation: $bodyBlockTag);

$headerOne = function (string $firstRowText) use ($body, $h1BlockTag) {
    $h1Node = new LightElementNode(elementVariation: $h1BlockTag);
    try {
        $h1Node->add(new LightTextNode($firstRowText));
        $body->add($h1Node);
    }catch (Exception $e)
    {
        echo "An error occurred: " . $e->getMessage();    }
};

$addNode = function (ElementVariation $variation, string $text) use ($body) {
    $node = new LightElementNode(elementVariation: $variation);
    $node->add(new LightTextNode($text));
    $body->add($node);
};

$url = 'https://www.gutenberg.org/cache/epub/1513/pg1513.txt';
$handle = fopen($url, 'r');

if (!$handle) {
    throw new Exception("Failed to retrieve content.");
}

$firstLineRead = false;

while (($line = fgets($handle)) !== false) {
    $line = trim($line);

    if (!$firstLineRead) {
        $headerOne($line);
        $firstLineRead = true;
        continue;
    }

    if (strlen($line) < 20) {
        $addNode($h2BlockTag, $line);
    } elseif (str_starts_with($line, ' ')) {
        $addNode($blockQuoteTag, $line);
    } else {
        $addNode($paragraphBlockTag, $line);
    }
}

fclose($handle);

echo $body->getHTML() . PHP_EOL;
$finalMemory = memory_get_usage();

echo "Пам'ять, що використовує дерево верстки: " . ($finalMemory - $initialMemory) . " байт.";
