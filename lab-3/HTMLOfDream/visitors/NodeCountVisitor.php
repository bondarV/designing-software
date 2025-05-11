<?php

namespace visitors;

use LightElementNode;
use LightTextNode;

class NodeCountVisitor implements IVisitor
{
    protected int $nodeCount = 0;

    protected int $textCount = 0;

    public function getTextCount(): int
    {
        return $this->textCount;
    }

    public function getNodeCount(): int
    {
        return $this->nodeCount;
    }

    //This is weak example 'cause we only count text nodes and element nodes; the object is unused.
    //In ideal, we need to rely on our object's exclusive methods later
    public function visitTextNode(LightTextNode $textNode): void
    {
        echo 'Text item #'. ++$this->textCount. ' ';
    }

    public function visitElementNode(LightElementNode $elementNode): void
    {
        echo 'Node item #'. ++$this->nodeCount. ' ';
    }
}