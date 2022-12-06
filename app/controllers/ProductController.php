<?php
namespace Controllers;
use Core\Controller;
use Core\View;
use Models\Product;
use Models\Model;

class ProductController extends Controller
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Product();
    }
    public function index(): View
    {
        $data['products'] = $this->conn->getAllProducts();
        return $this->view('products/index',$data);
    }
    public function add()
    {
        return $this->view('products/add');
    }
    public  function insert()
    {
        $request = $_REQUEST;
        $product = $this->Model(ucfirst($request['productType']));
        $new_request = $product->add($request);
        if($new_request == false)
        {
            $data['error'] = "not added check sku value must be unique";
            $data['products'] = $this->conn->getAllProducts();
            $this->view('products/index',$data);
        }
        $this->redirect('/');
        return true;
    }

    public function delete()
    {
        if(count($_REQUEST)<1)
        {
            $data['error'] = "select at least one record";
            $data['products'] = $this->conn->getAllProducts();
            $this->view('products/index',$data);
        }
        else
        {
            $model = new model();
            $model->destroy($_REQUEST);
            $control = new Controller();
            $control->redirect('/');
        }
    }
}