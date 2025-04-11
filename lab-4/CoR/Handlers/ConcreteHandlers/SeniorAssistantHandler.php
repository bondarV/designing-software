<?php

namespace Handlers\ConcreteHandlers;


use Handlers\BaseHandler;



class SeniorAssistantHandler extends BaseHandler
{
    public function handle(): void
    {
        echo 'You  was redirected to intermediate-knowledge person to tackle adversities  ' . PHP_EOL;
        echo 'Do you have got kind of peculiar problem?(Y/N) ' . PHP_EOL;
        $answer = lcfirst(trim(fgets(STDIN)));
        if ($answer === 'y') {
            providing_answer(3);
        } else {
            parent::handle();
        }
    }
}