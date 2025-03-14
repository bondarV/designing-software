<?php

namespace Products\ConcreteProducts\EBooks;

use Products\Interfaces\EBook;

class IproneEBook implements EBook
{
    public function getVersion(): string
    {
        return "2.0";
    }

    public function getImageFormats(): array
    {
        return ["PDF", "EPUB", "MOBI"];
    }

    public function coatingOfDisplay(): string
    {
        return "Glossy";
    }
}
