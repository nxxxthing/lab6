<?php

namespace App\Http\Controllers;


//use App\Models\Product;
use App\Models\products;
use App\Models\stores;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $Products = products::select('name')->distinct()->get();
        return view('main', ['Products' => $Products]);
    }

    public function getByName($name){
        $Products = products::all();
        $stores = [];
        $prices = [];
        foreach ($Products as $product) {
            if ($name == $product->name) {
                array_push($stores, stores::find($product->store_id)->name);
                array_push($prices, $product->price);
            }
        }
        return view('ProductPage', ['product' => $name, 'stores' => $stores, 'prices' => $prices]);
    }

    public function HasMany($store) {
        $Products = products::all();
        $Stores = stores::all();
        $id = 0;
        foreach ($Stores as $st)
            if ($st->name == $store) $id = $st->id;
        $products = [];
        foreach ($Products as $product) {
            if ($product->store_id == $id) array_push($products, $product);
        }
        return view("/StorePage", ['Products' => $products, 'st_name' => $store]);
    }
}
