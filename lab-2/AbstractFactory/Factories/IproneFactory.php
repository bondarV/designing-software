<?php

namespace Factories;

use Products\ConcreteProducts\EBooks\IproneEBook;
use Products\ConcreteProducts\Laptops\IproneLaptop;
use Products\ConcreteProducts\Netbooks\IproneNetbook;
use Products\ConcreteProducts\SmartPhones\IproneSmartphone;
use Products\Interfaces\EBook;
use Products\Interfaces\Laptop;
use Products\Interfaces\Netbook;
use Products\Interfaces\Smartphone;

class IproneFactory implements DeviceFactory
{
    public function assembleLaptop(): Laptop
    {
        return new IproneLaptop();
    }

    public function assembleNetbook(): Netbook
    {
        return new IproneNetbook();
    }

    public function assembleSmartphone(): Smartphone
    {
        return new IproneSmartphone();
    }

    public function assembleEbook(): Ebook
    {
        return new IproneEbook();
    }

}