<?php

namespace App\Models;

class Furniture extends Product
{
    protected $height;

    protected $width;

    protected $length;

    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->height = $data['height'];
        $this->width = $data['width'];
        $this->length = $data['length'];
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getLength()
    {
        return $this->length;
    }
}