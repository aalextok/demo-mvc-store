<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Type;

class ProductController extends BaseController
{
    public function actionIndex()
    {
        // Retrieve all products from DB


        self::render('product-list', [
            'title' => 'Product List',
        ]);
    }

    public function actionShowEditForm()
    {
        // Retrieve types and related options:
        $types = Type::findAll();

        // echo "<pre>";
        // var_dump($types);
        // echo "</pre>";
        // die;

        // Render form with dynamically changing options:
        self::render('product-edit', [
            'title' => 'Product Add',
            'types' => $types,
            'js_file' => 'add_product',
            'css_file' => 'style_add',
        ]);
    }

    public function actionSaveProduct($request)
    {
        $data = $request->getBody();

        var_dump($data); die;

        $product = Product::getProduct($data);
        if ($product) {

        }
    }
}