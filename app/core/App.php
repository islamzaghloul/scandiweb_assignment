<?php
namespace Core;
use Controllers\ProductController;

class App
{
    protected $controller = "ProductController";
    protected $action = "";
    protected $params = [];

    public function __construct()
    {
        return $this->handle();
    }

    private function handle()
    {


        $request = $_SERVER['REQUEST_URI'];
        $controller =new ProductController();
        if($request =='/add-product') {
            return  $controller->add();
        } elseif ($request =='/delete') {
            return  $controller->delete();
        } elseif ($request =='/') {
            return $controller->index();
        } elseif ($request =='/insert') {
            return  $controller->insert();
        } else{
            http_response_code(404);
            return new View('error');
        }
    }
}