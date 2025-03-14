<?php

namespace Products\Interfaces;

interface Laptop
{
    public function getModel(): string;

    public function getScreenSize(): string;

    public function getOperatingSystem(): string;
}