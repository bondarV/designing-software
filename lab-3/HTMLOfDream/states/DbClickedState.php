<?php

namespace states;

class DbClickedState extends ButtonState
{

    function click(): void
    {
        echo 'Double Click is already pressed' . PHP_EOL;
        echo 'WARNING!!!!!!!!!!' . PHP_EOL;
    }

    public function __toString(): string
    {
        return 'STATE: '.'DbClicked'.PHP_EOL;
    }
}