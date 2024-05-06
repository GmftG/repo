<?php

namespace src\Core;

class Cookie {

    use ServerArrayAccessTrait;
    use MutableServerArrayTrait {
        add as private traitAdd;
        delete as private traitDelete;
    }

    public function __construct() {
        $this->serverArray = $_COOKIE;
    }

    public function add(string $key, $value) {
        setcookie($key, $value);
        $this->traitAdd($key, $value);
    }

    public function delete(string $key) {
        setcookie($key, null, -1);
        $this->traitDelete($key);
    }

	public function clear() {
        foreach ($this->serverArray as $key => $value) {
            $this->delete($key);
        }
	}
}