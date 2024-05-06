<?php

namespace src\Core;

trait MutableServerArrayTrait {

    private array $serverArray;

    public function add(string $key, $value) {
        $this->serverArray[$key] = $value;
    }

    public function delete(string $key) {
        unset($this->serverArray[$key]);
    }

    public abstract function clear();
}