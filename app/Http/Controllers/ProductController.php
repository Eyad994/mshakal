<?php

namespace App\Http\Controllers;

use App\Repository\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    /**
     * HomeController constructor.
     * @param $product
     */
    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    public function getProductByCategory($id)
    {
        $products = $this->product->getProductsByCategory($id);
        $categories = $this->product->getAllCategories();

        return view('mshakal/product/products', compact('products', 'categories'));

    }

    public function getProductBySlug($slug)
    {
        $product = $this->product->getProductBySlug($slug);
        return view('mshakal/product/show', compact('product'));

    }
}
