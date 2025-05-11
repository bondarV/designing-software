<?php

namespace visitors;

interface IVisitor
{
    public function visitTextNode(\LightTextNode $textNode) : void;

    public function visitElementNode(\LightElementNode $elementNode) : void;

}