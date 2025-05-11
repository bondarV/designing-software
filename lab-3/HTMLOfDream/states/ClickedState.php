<?php

namespace states;

class ClickedState extends ButtonState
{

    function click(): void
    {
        $this->button->transitionTo(new DbClickedState);
        echo 'Double click is pressed'.PHP_EOL;
        sleep(1);
    }
    public function __toString(): string
    {
        return 'STATE: '.'Clicked'.PHP_EOL;
    }
}