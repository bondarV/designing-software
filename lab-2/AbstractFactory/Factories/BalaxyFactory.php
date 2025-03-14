<?php

namespace Factories;

use Products\Interfaces\Laptop;
use Products\ConcreteProducts\Laptops\BalaxyLaptop;
use Products\Interfaces\Netbook;
use Products\ConcreteProducts\Netbooks\BalaxyNetbook;
use Products\Interfaces\Smartphone;
use Products\ConcreteProducts\SmartPhones\BalaxySmartphone;
use Products\Interfaces\EBook;
use Products\ConcreteProducts\EBooks\BalaxyEBook;

class BalaxyFactory implements DeviceFactory
{
    public function assembleLaptop(): Laptop
    {
        return new BalaxyLaptop();
    }

    public function assembleNetbook(): Netbook
    {
        return new BalaxyNetbook();
    }

    public function assembleSmartphone(): Smartphone
    {
        return new BalaxySmartphone();
    }

    public function assembleEbook(): EBook
    {
        return new BalaxyEBook();
    }
}
