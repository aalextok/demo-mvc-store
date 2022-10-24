<?php

namespace App\Models;

class Dvd extends Product
{
    protected $size;

    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->size = $data['size'];
    }

    public function getSize()
    {
        return $this->size;
    }
}