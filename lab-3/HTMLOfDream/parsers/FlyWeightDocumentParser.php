<?php

namespace parsers;

use ElementFactory;
use LightElementNode;
use LightNode;
use LightTextNode;

class FlyWeightDocumentParser implements IDocumentParser
{

    public function processHeadline(string $text): LightNode
    {
        $h1 = new LightElementNode(ElementFactory::getFlyweight('h1', 'display', false), cssClasses:['background-color' => 'red', 'color' => 'white']);


        $h1->add(new LightTextNode($text));

        return $h1;
    }

    public function processLine(string $text): LightNode
    {
        if (strlen($text) < 20) {
            $node = new LightElementNode(ElementFactory::getFlyweight('h2'));
        } elseif (str_starts_with($text, ' ')) {
            $node = new LightElementNode(ElementFactory::getFlyweight('blockquote'));
        } else {
            $node = new LightElementNode(ElementFactory::getFlyweight('p'));
        }
        $node->add(new LightTextNode($text));

        return $node;
    }
}