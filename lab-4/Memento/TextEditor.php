<?php


class TextEditor
{
    private TextDocument $document;
    private array $history = [];

    public function __construct(TextDocument $document)
    {
        $this->document = $document;
    }

    public function save(): void
    {
        $this->history[] = $this->document->createMemento();
    }

    public function undo(): void
    {
        if ($this->history) {
            $this->document->restoreFromMemento(array_pop($this->history));
        }
    }
}