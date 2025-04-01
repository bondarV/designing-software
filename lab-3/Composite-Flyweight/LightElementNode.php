<?php

class LightElementNode extends LightNode
{
    protected array $children = [];
    protected ElementVariation $elementVariation;
    protected array $cssClasses = [];

    public function __construct(ElementVariation $elementVariation, array $cssClasses = [])
    {
        $this->elementVariation = $elementVariation;
        $this->cssClasses = $cssClasses;
    }

    public function add(LightNode $child): LightNode
    {
        if ($this->elementVariation->isSelfClosing()) {
            throw new Exception("Self-closing tags cannot have children.");
        }
        $this->children[] = $child;
        return $child;
    }

    public function remove(LightNode $child): void
    {
        $this->children = array_filter($this->children, fn($node) => $node !== $child);
    }

    public function getChildrenCount(): int
    {
        return count($this->children);
    }

    public function getInnerHTML(): string
    {
        if ($this->elementVariation->isSelfClosing()) {
            return "";
        }
        return implode('', array_map(fn($child) => $child->getHTML(), $this->children));
    }

    private function structureClasses(): string
    {
        return implode(" ", $this->cssClasses);
    }

    public function getOuterHTML(): string
    {
        $tagName = $this->elementVariation->getTagName();
        $classAttribute = $this->structureClasses() ? ' class="' . $this->structureClasses() . '"' : '';
        if ($this->elementVariation->isSelfClosing()) {
            return "<$tagName$classAttribute />";
        }
        return "<$tagName$classAttribute>" . $this->getInnerHTML() . "</$tagName>";
    }

    public function getHTML(): string
    {
        return $this->getOuterHTML();
    }
}
