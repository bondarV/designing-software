<?php

namespace classes;
interface IFileLogger
{
    public function log(string $message): void;

    public function error(string $message): void;

    public function warn(string $message): void;
}