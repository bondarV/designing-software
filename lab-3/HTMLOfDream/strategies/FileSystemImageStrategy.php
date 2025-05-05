<?php

namespace strategies;

class FileSystemImageStrategy implements ImageLoadStrategy {
    public function loadImage(string $source): void {
        if (file_exists($source)) {
            echo "Loading image({$source}) from file system...";
        } else {
            echo 'File not found!';
        }
    }
}