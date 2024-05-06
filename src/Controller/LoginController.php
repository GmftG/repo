<?php

namespace TeaLovers\TeaChat\Controller;

use TeaLovers\TeaChat\Core\Cookie;
use TeaLovers\TeaChat\Core\Post;
use TeaLovers\TeaChat\Core\Session;
use TeaLovers\TeaChat\Core\View;
use TeaLovers\TeaChat\Utils\CapchaWrapper;

class LoginController
{
    public function mainAction()
    {
        $session = new Session();
        $post = new Post();
        $view = new View();
        $cookie = new Cookie();
        $captchaWrapper = new CapchaWrapper();

        if (
            !$session->has("login") &&
            $post->has("user_login") &&
            $captchaWrapper->checkCaptcha($post->get("captcha"))
        ) {
            $session->add("login", $post->get("user_login"));
        }

        $login = $session->get('login');

        if ($login) {
            header('Location: /');
        }

        $view->render('login', [
            'theme' => $cookie->get('theme'),
            'captcha' => $captchaWrapper->getCaptcha()
        ]);
    }

    public function logoutAction()
    {
        $session = new Session();
        $session->delete('login');
        header('Location: /login');
    }
}
