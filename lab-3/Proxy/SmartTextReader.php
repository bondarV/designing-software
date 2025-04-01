<?php


class SmartTextReader implements ISmartTextReader
{
    private array $charactersInLines = [];

    /**
     * @throws Exception
     */
    public function read($path): array
    {
        try{
            foreach(file($path,FILE_IGNORE_NEW_LINES) as $line){
               $this->charactersInLines[] = str_split($line);
            }
        }catch (Exception){
            throw new Exception("Файл не існує або недоступний: $path");
        }
        return $this->charactersInLines;
        }
}