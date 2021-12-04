<?php
namespace App\Controllers;

abstract class BaseController {
    protected $templateDir = __DIR__ . '/../Views/';
    protected $params;

    public function __construct(string $action, array $params = [])
    {
        $this->params = $params;

        $method = $action;
        if (is_callable([$this, $method])) {
            $this->$method();
        }
    }
    public function render(string $templateFile, string $viewFile, string $title, array $vars) {
        $template = $this->templateDir . $viewFile;

        foreach ($vars as $key => $value) {
            ${$key} = $value;
        }

        ob_start();
        require $template;
        $content = ob_get_clean();
        require $this->templateDir . $templateFile;
        exit;
    }
}