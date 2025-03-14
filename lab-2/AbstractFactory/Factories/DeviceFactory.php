<?php

namespace Factories;

use Products\Interfaces\EBook;
use Products\Interfaces\Laptop;
use Products\Interfaces\Netbook;
use Products\Interfaces\Smartphone;

interface DeviceFactory
{
    public function assembleEbook() : EBook;
    public function assembleLaptop() : Laptop;

    public function assembleNetbook() : Netbook;

    public function assembleSmartphone() : Smartphone;

}