<?php

namespace App\Repository;

use App\Category;
use App\Product;

class ProductRepository implements ProductInterfaceRepository
{

    public function getProductsByCategory($id)
    {
        $products = Product::where('category_id', $id)->get();
        return $products;
    }

    public function getAllCategories()
    {
        return Category::all();
    }

    public function getProductBySlug($slug)
    {
        return Product::where('slug', $slug)->first();
    }
}