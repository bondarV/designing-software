<?php


abstract class LightNode
{
    abstract public function getHTML(): string;

    final public function lifeCycleExhibit(): void
    {
        $this->onCreated();

        $this->onTextRendered();
        $this->onStylesApplied();
    }

    public function onCreated(): void
    {
    }
    public function onTextRendered(): void
    {
    }

    public function onStylesApplied(): void
    {
    }

    //I tried to show all possible steps within this pattern...
    //This method is not included in algorithm flow due to desire of invoking during node adding process
    //        if(method_exists(LightNode::class, 'onInserted')) {
    //            $this->onInserted();
    //        }
    // It is complicated to read the add logic here,this pattern struck to me as sequential
    // algorithm with certain conditionals (if data passed inside subclasses correctly)
    public abstract function onInserted(string $parent): void;



}