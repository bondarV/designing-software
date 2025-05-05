<?php

namespace strategies;

class NetworkImageStrategy implements ImageLoadStrategy
{
    public function loadImage(string $source): void
    {
        echo "Loading image({$source}) from network...";
    }
}