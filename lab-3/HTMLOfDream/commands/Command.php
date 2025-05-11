<?php

namespace commands;

use FileLogic;

abstract class Command implements ICommand
{
    protected FileLogic $fileOperations;
    protected string $id;
    public function __construct(FileLogic $receiver,string $id)
    {
        $this->fileOperations = $receiver;
        $this->id = $id;
    }
}