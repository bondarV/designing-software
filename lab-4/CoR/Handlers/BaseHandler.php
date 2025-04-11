<?php

namespace Handlers;

abstract class BaseHandler implements IHandler
{
    public ?BaseHandler $nextHandler = null;

    public function setNext(BaseHandler $handler): BaseHandler
    {
        $this->nextHandler = $handler;
        return $this->nextHandler;
    }

    public function handle(): void
    {
        if ($this->nextHandler) {
            $this->nextHandler->handle();
        } else {
            echo 'Unfortunately, you chosen non-existed option ';
        }

    }
}