<?php

namespace Products\Interfaces;

interface Netbook
{
    public function getHardDiskSize(): string;

    public function getSpecialFeatures(): array;

    public function getCPUModel(): string;
}