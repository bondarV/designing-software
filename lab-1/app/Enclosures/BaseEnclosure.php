<?php
namespace Enclosures;

use Enclosures\Interfaces\Enclosure;

abstract class BaseEnclosure implements Enclosure {
    protected int $capacity;
    protected string $type;
    protected string $size;

    public function __construct(int $capacity, string $type, string $size) {
        $this->capacity = $capacity;
        $this->type = $type;
        $this->size = $size;
    }

    public function getCapacity(): int {
        return $this->capacity;
    }

    public function getType(): string {
        return $this->type;
    }

    public function getSize(): string {
        return $this->size;
    }
}
