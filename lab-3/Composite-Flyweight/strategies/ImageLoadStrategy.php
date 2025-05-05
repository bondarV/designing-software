<?php

namespace strategies;

interface ImageLoadStrategy {
    public function loadImage(string $source): void;
}