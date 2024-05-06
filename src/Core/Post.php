<?php

namespace src\Core;

class Post {

    use ServerArrayAccessTrait;

    public function __construct() {
        $this->serverArray = $_POST;
    }
}