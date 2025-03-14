<?php

namespace Products\ConcreteProducts\EBooks;

use Products\Interfaces\EBook;

class BalaxyEBook implements EBook
{
    public function getVersion(): string
    {
        return "3.0";
    }

    public function getImageFormats(): array
    {
        return ["DJVU", "TXT", "HTML"];
    }

    public function coatingOfDisplay(): string
    {
        return "Anti-glare";
    }
}
