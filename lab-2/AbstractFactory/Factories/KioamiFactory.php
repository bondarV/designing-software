<?php

namespace Factories;

use Products\ConcreteProducts\EBooks\KioamiEBook;
use Products\ConcreteProducts\Laptops\KioamiLaptop;
use Products\ConcreteProducts\Netbooks\KiaomiNetbook;
use Products\ConcreteProducts\SmartPhones\KioamiSmartphone;
use Products\Interfaces\EBook;
use Products\Interfaces\Laptop;
use Products\Interfaces\Netbook;
use Products\Interfaces\Smartphone;

class KioamiFactory
{
    public function assembleLaptop(): Laptop
    {
        return new KioamiLaptop();
    }

    public function assembleNetbook(): Netbook
    {
        return new KiaomiNetbook();
    }

    public function assembleSmartphone(): Smartphone
    {
        return new KioamiSmartphone();
    }

    public function assembleEbook(): Ebook
    {
        return new KioamiEBook();
    }
}