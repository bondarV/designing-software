<?php

class SmartTextReaderLocker implements ISmartTextReader
{
    public function __construct(public ISmartTextReader $reader, public string $regexLimitExpression){

    }
    public function read(string $path): array
    {
        if(preg_match($this->regexLimitExpression, $path) ){
            echo 'Access denied';
            return [];
        }
        return $this->reader->read($path);
    }
}