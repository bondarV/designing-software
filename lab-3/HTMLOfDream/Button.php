<?php

use states\ButtonState;

class Button extends LightElementNode
{
    private ButtonState $state;

    public function __construct(ElementVariation $elementVariation, ButtonState $state, array $cssClasses = [], array $tagAttributes = [])
    {
        parent::__construct($elementVariation, $cssClasses, $tagAttributes);
        $this->transitionTo($state);
    }

    public function transitionTo(ButtonState $state): void
    {
        $this->state = $state;
        echo $state;
        $state->setButton($this);
    }

    public function click(): void
    {
        $this->state->click();
    }
}