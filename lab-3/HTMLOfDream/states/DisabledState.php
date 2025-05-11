<?php

namespace states;

class DisabledState extends ButtonState
{

    function click(): void
    {
        echo __METHOD__.PHP_EOL;
        echo 'Your button is frozen'.PHP_EOL;
    }


}