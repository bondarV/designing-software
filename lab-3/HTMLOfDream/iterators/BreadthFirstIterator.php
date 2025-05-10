<?php

namespace iterators;

use Iterator;

class BreadthFirstIterator implements Iterator
{
    private array $queue = [];
    private mixed $current = null;
    private int $currentLevel = 0;

    public function __construct(private \LightNode $rootNode)
    {
        $this->rewind();
    }

    public function current(): mixed
    {
        return $this->current;
    }

    public function getLevel(): int
    {
        return $this->currentLevel;
    }

    public function next(): void
    {
        if (empty($this->queue)) {
            $this->current = null;
            $this->currentLevel = 0;
            return;
        }

        ['node' => $this->current, 'level' => $this->currentLevel] = array_shift($this->queue);

        if (method_exists($this->current, 'getChildren')) {
            foreach ($this->current->getChildren() as $child) {
                $this->queue[] = [
                    'node' => $child,
                    'level' => $this->currentLevel + 1
                ];
            }
        }
    }

    public function key(): mixed
    {
        return null;
    }

    public function valid(): bool
    {
        return $this->current !== null;
    }

    public function rewind(): void
    {
        $this->queue = [[
            'node' => $this->rootNode,
            'level' => 0
        ]];
        $this->next();
    }
}
