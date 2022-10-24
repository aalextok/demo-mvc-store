<?php

namespace App\Models;

class Book extends Product
{
    protected $weight;

    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->weight = $data['weight'];
    }

    public function getWeight()
    {
        return $this->weight;
    }
}