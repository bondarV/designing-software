<?php

use commands\ICommand;

class Document
{
    private ICommand $saveFile;

    private ICommand $printFile;

    public function __construct(ICommand $saveFile, ICommand $printFile)
    {
        $this->saveFile = $saveFile;
        $this->printFile = $printFile;
    }
    public function setSaveCommand(ICommand $command): void
    {
        $this->saveFile = $command;
    }

    public function setPrintCommand(ICommand $command): void
    {
        $this->printFile = $command;
    }

    public function printFile(): void
    {
        $this->saveFile->execute();
        $this->printFile->execute();
    }

    public function saveFile(): void
    {
        $this->saveFile->execute();

    }
}