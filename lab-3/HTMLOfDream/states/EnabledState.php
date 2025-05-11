<?php

namespace states;

class EnabledState extends ButtonState
{

    function click(): void
    {
        $this->button->transitionTo(new ClickedState);
        echo 'Click is pressed'.PHP_EOL;
        $this->button->click();
        // In live-action execution it will be taken into account,however this program work more
        // straight-forwardly( we demonstrate right away action)
        sleep(1);
        $this->button->transitionTo(new EnabledState);

    }
    public function __toString(): string
    {
        return 'STATE: '.'Enabled'.PHP_EOL;
    }
}