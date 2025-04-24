<?php
class ElementVariation
{
    public string $tagName {
        get {
            return $this->tagName;
        }
    }
    private string $displayValue{
        get {
            return $this->displayValue;
        }
    }
    public bool $isSelfClosing {
        get {
            return $this->isSelfClosing;
        }
    }

    // Конструктор з більш зрозумілими типами
    public function __construct(string $tagName, string $displayValue = 'block', bool $isSelfClosing = false)
    {
        $this->tagName = $tagName;
        $this->displayValue = $displayValue;
        $this->isSelfClosing = $isSelfClosing;
    }
}
