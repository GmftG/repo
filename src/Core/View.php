<?php

namespace src\Core;

class View {
    public function render(string $templateName, array $params = []) {
        $templatePath = 'src/Template/' . $templateName . '.php';

        if (file_exists($templatePath)) {
            extract($params);

            require($templatePath);
        }
    }
}