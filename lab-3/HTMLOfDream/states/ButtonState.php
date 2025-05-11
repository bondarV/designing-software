<?php

namespace states;

use Button;

abstract class ButtonState
{
    protected \Button $button;


    public function setButton(Button $button)
    {
        $this->button = $button;
    }

    // set of actions
    abstract function click(): void;

}