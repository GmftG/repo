<?php

namespace src\Core;

trait ServerArrayAccessTrait {

    private array $serverArray;

    public function get(string $key, $default = null) {
        return $this->serverArray[$key] ?? $default;
    }

    public function has(string $key) {
        return isset($this->serverArray[$key]);
    }
}