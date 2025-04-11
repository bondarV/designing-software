<?php

namespace Handlers;

interface IHandler
{
    public function setNext(BaseHandler $handler) : IHandler;
    public function handle() : void;
}