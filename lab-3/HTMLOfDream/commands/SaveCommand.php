<?php

namespace commands;

use Document;
use FileLogic;

class SaveCommand extends Command
{

    public function execute(): void
    {
        $this->fileOperations->saveOnlineVersion($this->id);
    }
}