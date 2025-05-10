<?php

class LightElementNode extends LightNode
{
    protected array $children = [];
    protected ElementVariation $elementVariation;
    protected array $cssClasses = [];

    public EventManager $eventManager;
    protected array $tagAttributes = [];

    public function __construct(ElementVariation $elementVariation, array $cssClasses = [], array $tagAttributes = [])
    {
        $this->elementVariation = $elementVariation;
        $this->cssClasses = $cssClasses;
        $this->tagAttributes = $tagAttributes;
        $this->eventManager = new EventManager();
    }

    public function add(LightNode $child): LightNode
    {
        if ($this->elementVariation->isSelfClosing) {
            throw new Exception($this->elementVariation->isSelfClosing);
        }
        if(method_exists($child, 'onInserted')) {
            $child->onInserted($this->elementVariation->tagName);
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

    private function buildStyleAttribute(): string
    {
        $filtered = array_filter(
            $this->cssClasses,
            fn($v) => $v !== '' && $v !== null
        );
        if (empty($filtered)) {
            return '';
        }

        $declarations = array_map(
            fn($prop, $val) => "$prop:$val",
            array_keys($filtered),
            $filtered
        );

        $string = implode('; ', $declarations);
        return ' style="' . htmlspecialchars($string, ENT_QUOTES) . '"';
    }

    private function structureAttributes(): string
    {
        $collectionOfAttributes = "";
        foreach ($this->tagAttributes as $name => $value) {
            $collectionOfAttributes .= "$name=\"$value\" ";
        }
        return $collectionOfAttributes
            ? <<<HTML
              style="$collectionOfAttributes"
              HTML: '';

    }

    public function getOuterHTML(): string
    {
        $tagName = $this->elementVariation->tagName;

        $classAttr = $this->buildStyleAttribute();
        $attribute = $this->structureAttributes();
        if ($this->elementVariation->isSelfClosing) {
            return "<$tagName$classAttr$attribute />";
        }

        return "<$tagName$classAttr$attribute>" . $this->getInnerHTML() . "</$tagName>";
    }

    public function getHTML(): string
    {
        return $this->getOuterHTML();
    }


    public function onCreated(): void
    {
        echo $this->elementVariation->tagName  . ' created (method' . __METHOD__.')' . PHP_EOL;
    }

    public function onStylesApplied(): void
    {
        if(isset($this->cssClasses)){
            echo $this->elementVariation->tagName . ' classes declarations applied'.PHP_EOL;
        }
    }

    public function onInserted(string $parent): void{
        echo $this->elementVariation->tagName . ' inserted inside'.$parent.PHP_EOL;
    }
}
