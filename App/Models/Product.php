<?php

namespace App\Models;

abstract class Product extends Model
{

    public $sku;

    public $name;

    public $price;

    public function __construct($data = [])
    {
        parent::__construct();

        $this->sku = $data['sku'];
        $this->name = $data['name'];
        $this->price = $data['price'];
    }

    public static function getProduct($data = [])
    {
        if (array_key_exists('type_switcher', $data)) {
            $type = $data['type_switcher'];
            switch ($type) {
                case 'dvd':
                    return new Dvd($data);
                case 'book':
                    return new Book($data);
                case 'furniture':
                    return new Furniture($data);
            }
        }
        return null;
    }


    // Example getters:

//    public function getSku()
//    {
//        return $this->sku;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getPrice()
//    {
//        return $this->price;
//    }
}