<?php

namespace Models;

class Book extends Product
{
    public function add($request)
    {
        $request['attribute'] = 'Weight: ' . $request['weight'] . 'KG';
       return $this->create($request);

    }
}