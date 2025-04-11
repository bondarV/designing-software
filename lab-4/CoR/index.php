<?php
include '../helpers-functions/autoload.php';
include 'helperFunctions/awaiting_process.php';

use Handlers\ConcreteHandlers\AIAssistantHandler;
use Handlers\ConcreteHandlers\CreatorAssistantHandler;
use Handlers\ConcreteHandlers\FreshmanAssistantHandler;
use Handlers\ConcreteHandlers\SeniorAssistantHandler;
use Handlers\IHandler;


function clientCode(IHandler $handler) : void
{
    $handler->handle();
    echo PHP_EOL;
}

$assistantOfFirstLevel = new AIAssistantHandler();
$assistantOfSecondLevel = new FreshmanAssistantHandler();
$assistantOfThirdLevel = new SeniorAssistantHandler();
$assistantOfFourthLevel = new CreatorAssistantHandler();

$assistantOfFirstLevel->setNext($assistantOfSecondLevel)->setNext($assistantOfThirdLevel)->setNext($assistantOfFourthLevel);

clientCode($assistantOfFirstLevel);
