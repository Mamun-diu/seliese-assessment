<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $jsonString = file_get_contents(base_path('storage/json/product-list.json'));
        $data['productLists'] = json_decode($jsonString, true);
        return view('home.product-list', $data);
    }
    public function details($id = null)
    {
        $jsonString = file_get_contents(base_path('storage/json/product-list.json'));
        $products = json_decode($jsonString, true);
        $data['productDetails'] = [];
        foreach ($products as $key => $product) {
            if ($product['product_id'] == $id) {
                $data['productDetails'] = $product;
            }
        }
        return view('home.product-view', $data);
    }

    public function addCart($id = null)
    {
        $jsonString = file_get_contents(base_path('storage/json/product-list.json'));
        $products = json_decode($jsonString, true);
        foreach ($products as $key => $product) {
            if ($product['product_id'] == $id) {
                \Cart::add([
                    ['id' => $product['product_id'], 'name' => $product['title'], 'qty' => 1, 'price' => $product['price'], 'weight' => 0]
                ]);
            }
        }
        return back();
    }

    public function cartItem() {
        $data['products'] = [];
        $cartProducts = \Cart::content();
        foreach ($cartProducts as $key => $products) {
            array_push($data['products'], $products);
        }
        return view('home.checkout', $data);
    }
}
