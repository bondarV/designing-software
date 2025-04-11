<?php

namespace Handlers\ConcreteHandlers;

use Handlers\BaseHandler;

class CreatorAssistantHandler extends BaseHandler
{
    public function handle() : void
    {
        echo 'You was redirected to experienced person to tackle adversities  ';
        echo 'Do you have got kind of advanced problem?(Y/N) ';
        $answer = lcfirst(trim(fgets(STDIN)));
        if($answer === 'y'){
            providing_answer(10);
        }else{
            parent::handle();
        }
    }
}