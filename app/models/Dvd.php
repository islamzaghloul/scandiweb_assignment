<?php

namespace Models;

class Dvd extends Product
{
    public function add($request)
    {
        $request['attribute'] = 'Size: ' . $request['size'] . ' MB';
        return $this->create($request);
    }
}