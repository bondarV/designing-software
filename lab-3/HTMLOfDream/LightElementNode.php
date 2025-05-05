<?php

class LightElementNode extends LightNode implements SplSubject
{
    protected array $children = [];
    protected ElementVariation $elementVariation;
    protected array $cssClasses = [];

    protected array $listeners = [];

    public function __construct(ElementVariation $elementVariation, array $cssClasses = [])
    {
        $this->elementVariation = $elementVariation;
        $this->cssClasses = $cssClasses;
    }

    public function add(LightNode $child): LightNode
    {
        if ($this->elementVariation->isSelfClosing) {
            throw new Exception($this->elementVariation->isSelfClosing);
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
        return implode('', array_map(fn($child) => $child->getHTML(), $this->children));
    }

    private function structureClasses(): string
    {
        return implode(" ", $this->cssClasses);
    }

    public function getOuterHTML(): string
    {
        $tagName = $this->elementVariation->tagName;

        $classAttribute = $this->structureClasses() ? ' class="' . $this->structureClasses() . '"' : '';

        if ($this->elementVariation->isSelfClosing) {
            return "<$tagName$classAttribute />";
        }

        return "<$tagName$classAttribute>" . $this->getInnerHTML() . "</$tagName>";
    }

    public function getHTML(): string
    {
        return $this->getOuterHTML();
    }


    public function attach(SplObserver $observer, string $event = '*')
    {

        if (!isset($this->listeners[$event])) {
            $this->listeners[$event] = [];
        }
        $this->listeners[$event][] = $observer;
    }


    public function detach(SplObserver $observer, string $event = '*')
    {
        if (isset($this->listeners[$event])) {
            foreach ($this->listeners[$event] as $key => $value) {
                if ($value === $observer) {
                    unset($this->listeners[$event][$key]);
                }
            }
        }
    }


    public function notify()
    {
        foreach ($this->listeners as $event => $observers) {
            foreach ($observers as $observer) {
                $observer->update($this);
            }
        }
    }
}
