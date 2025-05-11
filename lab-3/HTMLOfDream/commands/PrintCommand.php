<?php

namespace commands;

use FileLogic;

class PrintCommand extends Command
{
    protected string $fileSrc;

    public function __construct(FileLogic $receiver, string $id, string $file = './people.txt')
    {
        parent::__construct($receiver, $id);
        $this->fileSrc = $file;
    }

    public function execute(): void
    {
        $this->fileOperations->printIntoFile($this->fileSrc, $this->id);
    }

}