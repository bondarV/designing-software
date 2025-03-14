<?php

namespace Products\Interfaces;

interface Smartphone
{
    public function getModel(): string;

    public function operatingSystem(): string;

    public function longevity(): int;
}