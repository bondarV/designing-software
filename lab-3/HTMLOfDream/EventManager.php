<?php

class   EventManager implements SplSubject
{
    public array $listeners = [];
    public function attach(SplObserver $observer, string $event = '*') : void
    {

        if (!isset($this->listeners[$event])) {
            $this->listeners[$event] = [];
        }
        $this->listeners[$event][] = $observer;
    }


    public function detach(SplObserver $observer,string $event = '*') : void
    {
        if (isset($this->listeners[$event])) {
            $this->listeners[$event] = array_filter($this->listeners[$event], fn($o) => $o !== $observer);
        }
        if(!$this->listeners[$event]){
            unset($this->listeners[$event]);
        }
    }


    public function notify() : void
    {
        foreach ($this->listeners as $event => $observers) {
            foreach ($observers as $observer) {
                $observer->update($this);
            }
        }
    }
}