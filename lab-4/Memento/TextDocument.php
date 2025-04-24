<?php



class TextDocument
{
    private string $content;

    public function __construct(string $content = '')
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function createMemento(): Memento
    {
        return new Memento($this->content);
    }

    public function restoreFromMemento(Memento $memento): void
    {
        $this->content = $memento->getContent();
    }
}