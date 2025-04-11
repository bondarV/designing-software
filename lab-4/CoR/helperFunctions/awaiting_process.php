<?php

function providing_answer (float | int $sec) : void
{
    echo 'Problem is on solving stage....'.PHP_EOL;
    sleep($sec);
    echo 'Problem is solved';
}