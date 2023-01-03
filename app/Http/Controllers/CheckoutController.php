<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Requests\UpdateCheckoutRequest;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaksi_header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = Product::find($id);
            $co = new Checkout();
            $cart = Cart::find($id);
            $co->nameco = $request->nameco;
            $co->name = $user->name;
            $co->emailco = $request->emailco;
            $co->email = $user->email;
            $co->phone = $request->phone;
            $co->address = $request->address;
            $co->city = $request->city;
            $co->province = $request->province;
            $co->zip = $request->zip;
            $co->deskripsi = $request->deskripsi;
            $co->id_product = $cart->product_title;
            $co->quantity = $cart->quantity;
            $co->price = $cart->price;
            $co->total = $cart->total;
            $co->save();

            return redirect('cart');
        } else {
            return redirect('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cart = session("cart");
        $id_transaksi = Transaksi_header::tambah_header_transaksi();
        foreach($cart as $c){
            $id_product = $c;
            $total = $c["subtotal"];
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $address = $request->address;
            $city = $request->city;
            $province = $request->province;
            $zip = $request->zip;
            $deskripsi = $request->deskripsi;
            $quantity = $c["quantity"];
            $price = $c["price"];
            $total = $c["total"];
            Checkout::tambah_checkout($id_product, $id_transaksi, $name, $email, $phone, $address, $city, $province, $zip, $deskripsi, $quantity, $price, $total);
        }
        session()->forget("cart");
        return redirect('/cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCheckoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheckoutRequest $request)
    {
        Checkout::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'phone' => $request ->phone,
            'address' => $request ->address,
            'city' => $request ->city,
            'province' => $request ->province,
            'zip' => $request ->province,
            'deskripsi' => $request ->deskripsi,
            'product_name' => $request ->product_name,
            'price' => $request ->price,
            'quantity' => $request ->quantity,
            'total' => $request ->total,

        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $order = Checkout::where('email', $user->email)->get();
            $count = Checkout::where('email', $user->email)->count();
            return view('order', compact('count', 'order'));
        } else {
            return redirect('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCheckoutRequest  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCheckoutRequest $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Checkout::find($id);
        $data->delete();
        return redirect()->back();
    }
}
