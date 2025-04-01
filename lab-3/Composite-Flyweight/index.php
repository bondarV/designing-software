<?php
spl_autoload_register(function ($class) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($path)) {
        include $path;
    }
});

$initialMemory = memory_get_usage();

// Створюємо фабрику для повторного використання об'єктів (Flyweight)
$factory = new ElementFactory();
$bodyBlockTag = $factory->getFlyweight('body');
$h1BlockTag = $factory->getFlyweight('h1');
$h2BlockTag = $factory->getFlyweight('h2');
$blockQuoteTag = $factory->getFlyweight('blockquote');
$paragraphBlockTag = $factory->getFlyweight('p');

// Кореневий елемент
$body = new LightElementNode(elementVariation: $bodyBlockTag);

$headerOne = function (string $firstRowText) use ($body, $h1BlockTag) {
    $h1Node = new LightElementNode(elementVariation: $h1BlockTag);
    $h1Node->add(new LightTextNode($firstRowText));
    $body->add($h1Node);
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
    } elseif (strpos($line, ' ') === 0) {
        $addNode($blockQuoteTag, $line);
    } else {
        $addNode($paragraphBlockTag, $line);
    }
}

fclose($handle);

echo $body->getHTML() . PHP_EOL;
$finalMemory = memory_get_usage();

// Виводимо різницю
echo "Пам'ять, що використовує дерево верстки: " . ($finalMemory - $initialMemory) . " байт.";
