<?php

namespace Products\ConcreteProducts\EBooks;

use Products\Interfaces\EBook;

class KioamiEBook implements EBook
{
    public function getVersion(): string
    {
        return "1.0";
    }

    public function getImageFormats(): array
    {
        return ["JPEG", "PNG", "GIF"];
    }

    public function coatingOfDisplay(): string
    {
        return "Matte";
    }
}
