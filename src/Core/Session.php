<?php

namespace src\Core;

class Session {

    use ServerArrayAccessTrait;
    use MutableServerArrayTrait;

    public function __construct() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        
        $this->serverArray = &$_SESSION;
    }

    public function clear() {
        session_destroy();
	}
}