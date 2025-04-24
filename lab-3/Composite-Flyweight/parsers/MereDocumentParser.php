<?php

namespace parsers;

use ElementVariation;
use Exception;
use LightElementNode;
use LightNode;
use LightTextNode;

class MereDocumentParser implements IDocumentParser
{
    public function processHeadline(string $text): LightNode
    {
        $h1 = new LightElementNode(new ElementVariation('h1', 'display', 'false'), ['background-color' => 'red', 'color' => 'white']);

        $h1->add(new LightTextNode($text));

        return $h1;
    }

    public function processLine(string $text): LightNode
    {
        if (strlen($text) < 20) {
            $node = new LightElementNode(new ElementVariation('h2'));
        } elseif (str_starts_with($text, ' ')) {
            $node = new LightElementNode(new ElementVariation('blockquote'));
        } else {
            $node = new LightElementNode(new ElementVariation('p'));
        }
        $node->add(new LightTextNode($text));

        return $node;
    }
}