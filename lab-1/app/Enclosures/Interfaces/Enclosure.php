<?php

namespace Enclosures\Interfaces;

interface Enclosure
{
    public function getCapacity(): int;
    public function getType(): string;
    public function getSize(): string;
}