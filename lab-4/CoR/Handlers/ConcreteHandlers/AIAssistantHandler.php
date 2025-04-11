<?php

namespace Handlers\ConcreteHandlers;

use Handlers\BaseHandler;

class AIAssistantHandler extends BaseHandler
{

    public function handle() : void
    {
        echo 'You was redirected to the bot helper assistance '.PHP_EOL;
        echo 'Do you have got kind of obvious problem?(Y/N) '.PHP_EOL;
        $answer = lcfirst(trim(fgets(STDIN)));
        if($answer === 'y'){
        providing_answer(1);
        }else{
            parent::handle();
        }
    }

}