<?php

use Factories\DeviceFactory;
use Products\Interfaces\EBook;
use Products\Interfaces\Laptop;
use Products\Interfaces\Netbook;
use Products\Interfaces\Smartphone;

class Application
{
    private EBook $ebook;
    private Laptop $laptop;
    private Netbook $netbook;
    private Smartphone $smartphone;

    public function __construct(protected DeviceFactory $deviceFactory)
    {
    }

    public function getEbook(): EBook
    {
        return $this->ebook = $this->deviceFactory->assembleEbook();
    }

    public function getLaptop(): Laptop
    {
        return $this->laptop = $this->deviceFactory->assembleLaptop();
    }

    public function getNetbook(): Netbook
    {
        return $this->netbook = $this->deviceFactory->assembleNetbook();
    }

    public function getSmartphone(): Smartphone
    {
        return $this->smartphone = $this->deviceFactory->assembleSmartphone();
    }
}
