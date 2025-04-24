<?php

use parsers\IDocumentParser;

class Client
{
    protected $fileHandle;
    public function __construct(protected string          $filePath,
                                protected IDocumentParser $parser)
    {
        $this->fileHandle = fopen($filePath, 'r');

        if (!$this->fileHandle) {
            throw new Exception("Failed to open file: " . $filePath);
        }
    }

    public function getMarkup() : string
    {
        $body = new LightElementNode(elementVariation: new ElementVariation('body'));
        $firstLineRead = false;
        while (($line = fgets($this->fileHandle)) !== false) {

            if (!$firstLineRead) {
                $body->add($this->parser->processHeadline($line));
                $firstLineRead = true;
                continue;
            }
            $node = $this->parser->processLine($line);

            $body->add($node);
        }
        fclose($this->fileHandle);
        return $body->getHTML();
    }

}