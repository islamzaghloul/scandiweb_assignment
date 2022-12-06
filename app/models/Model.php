<?php

namespace Models;
use Core\DB;

class Model extends DB
{
    protected $tableName = 'products';

    public function getAllProducts()
    {
        return $this->connect()->get($this->tableName);
    }

    public function create(array $request)
    {
        $sku = $request['sku'];
        $name = $request['name'];
        $price = $request['price'];
        $type = $request['productType'];
        $attribute = $request['attribute'];
        $data = array(
            "SKU"=> $sku,
            "name"=>$name,
            "price"=>$price,
            "producttype"=>$type,
            "attribute"=>$attribute,
        );
            $val =  $this->connect()->insert($this->tableName,$data);
            return $val;
    }
    public function destroy($req)
    {
        foreach ($req as $product) {
            $delete = $this->connect()->where('id', $product);
            $delete->delete($this->tableName);
        }
    }
}