<?php

namespace src\Utils;

use Gregwar\Captcha\CaptchaBuilder;
use src\Core\Session;

class CapchaWrapper {

    private CaptchaBuilder $capchaBuilder;
    private Session $session;

    public function __construct()
    {
        $this->capchaBuilder = new CaptchaBuilder();
        $this->capchaBuilder->build();

        $this->session = new Session();
    }

    public function getCaptcha(): string {
        $this->session->add('captcha', $this->capchaBuilder->getPhrase());
        return $this->capchaBuilder->inline();
    }

    public function checkCaptcha($phrase): bool {
        return $phrase === $this->session->get('captcha');
    }
}