<?php

namespace Enclosures;

class LargeEnclosure extends BaseEnclosure {
    public function __construct() {
        parent::__construct(20, "Large Enclosure", "Large");
    }
}