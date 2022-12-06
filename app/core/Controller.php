<?php
namespace Core;

class Controller
{
    protected $view;

    protected function view($template,$params=[])
    {
        $this->view = new View($template,$params);
        return $this->view;
    }
    public function redirect(string $url)
    {
        if (headers_sent() === false) {
            header('Location: ' . $url, true);
        }
        exit();
    }

    public function model(string $modelName)
    {
        $model = 'Models\\' . $modelName;
        return new $model();
    }
}