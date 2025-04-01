<?php

namespace classes;

class Logger implements IFileLogger
{

    public function log(string $message): void
    {
        echo "\e[0;32m$message\e[0m\n";
    }

    public function error(string $message): void
    {
        echo "\e[1;31m$message\e[0m\n";
    }

    public function warn(string $message): void
    {
        echo "\e[0;33m$message\e[0m\n";
    }
}