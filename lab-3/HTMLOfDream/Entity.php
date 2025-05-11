<?php

use visitors\IVisitor;

interface Entity
{
    public function accept(IVisitor $visitor): void;
}