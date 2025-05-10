<?php

namespace iterators;

use Iterator;

class DepthFirstIterator implements Iterator
{
    private array $stack = [];
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

        if (empty($this->stack)) {
            $this->current = null;
            $this->currentLevel = 0;
            return;
        }

        ['node' => $this->current, 'level' => $this->currentLevel] = array_pop($this->stack);

        if (method_exists($this->current, 'getChildren')) {
            $children = array_reverse($this->current->getChildren());
            foreach ($children as $child) {
                $this->stack[] = [
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
        $this->stack = [[
            'node' => $this->rootNode,
            'level' => 0
        ]];
        $this->next();
    }
}
