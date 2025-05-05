<?php

namespace parsers;

use LightNode;

interface IDocumentParser
{
    public function processHeadline(string $text) : LightNode;

    public function processLine (string $text) : LightNode;
}