<?php

namespace classes;

class FileWriter
{

    public function write(string $filePath, string $message): void
    {
        try {
            file_put_contents($filePath, $message, FILE_APPEND);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function writeLine(string $filePath, string $message): void
    {
        try {
            file_put_contents($filePath, $message . PHP_EOL, FILE_APPEND);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}