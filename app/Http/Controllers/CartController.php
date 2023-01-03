<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreCartRequest $request, $id)
    {
        Product::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'phone' => $request ->phone,
            'address' => $request ->address,
            'city' => $request ->city,
            'province' => $request ->province,
            'zip' => $request ->province,
            'deskripsi' => $request ->province,
            'product_name' => $request ->product,
            'price' => $request ->price,
            'quantity' => $request ->quantity,
        ]);

        return redirect('/admin');
        
    }
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = Product::find($id);
            $cart = new cart;

            $cart->email = $user->email;
            $cart->product_title = $product->name;
            $cart->image = $product->image;
            $cart->price = $product->price;

            $cart->quantity = $request->quantity;
            $cart->save();

            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $cart = Cart::where('email', $user->email)->get();
            $count = Cart::where('email', $user->email)->count();
            return view('cart', compact('count', 'cart'));
        } else {
            return redirect('login');
        }
    }
    public function buy(Cart $cart)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $cart = Cart::where('email', $user->email)->get();
            $count = Cart::where('email', $user->email)->count();
            return view('checkout', compact('count', 'cart'));
        } else {
            return redirect('login');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }
}
