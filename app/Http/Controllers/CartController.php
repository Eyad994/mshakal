<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * CartController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        /*\Cart::session(auth()->id())->clear();*/
        /*$userId = 1; // or any string represents user identifier
        $cart = \Cart::session($userId)->add(array(
            'id' => 456,
            'name' => 'Sample Item',
            'price' => 67.99,
            'quantity' => 1,
            'attributes' => [
                'name' => $product->name,
                'price' => $product->price,
                'desc' => $product->desc,
                'image' => $product->image,
            ],
        ));*/


        $cartCollection = \Cart::session(auth()->id())->getContent();

        $categories = Category::all();
        return view('cart/index', compact('cartCollection', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qty = $request->qty;

        if ($request->is_weight == 1)
        {
        $strQty = str_replace(".", "", $request->qty);
        $qty = intval($strQty);
        }

        $userId = auth()->id();

        \Cart::session($userId)->add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $qty,
            'attributes' => array(
                'image' => $request->image,
                'desc' => $request->desc,
                'slug' => $request->slug,
                'category' => $request->category
            )
        ));
        $count = \Cart::session(auth()->id())->getContent()->count();
        return response()->json(['message' => $request->name.' Added To Cart Successfully', 'cart_count' => $count], 200);

        //return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cartBody()
    {
        return view('cart.cart-body');
    }
}
