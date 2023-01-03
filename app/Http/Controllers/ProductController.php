<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Jenis;
use App\Models\Kayu;
use App\Models\Warna;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Warn;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')){
            return view('products', [
                // 'product'=> Product::where('name', 'like', '%'.$request->search,'%')->orWhere('jenis_id','like', '%'.$request->search.'%')->paginate()
                'products' => Product::where('name', 'like', '%'.$request->search.'%')->orwhere('jenis_id', 'like', '%'.$request->search.'%')->paginate(),
                // 'warnas' => Warna::where('warna', 'like', '%'.$request->search.'%')->paginate()
            
            ]);
        } else {
            return view('products', [
                'products' => Product::paginate(6),
                'kayus' => Kayu::all(),
                'jenis' => Jenis::all(),
                'warnas' => Warna::all(),
            ]);
        }
    }
    public function jenis(Request $request){
        if ($request->has('category')) {
            return view('products', [
                // 'product'=> Product::where('name', 'like', '%'.$request->search,'%')->orWhere('jenis_id','like', '%'.$request->search.'%')->paginate()
                'jenis' => Product::where('jenis', 'like', '%' . $request->search . '%')->paginate(),
                // 'warnas' => Warna::where('warna', 'like', '%'.$request->search.'%')->paginate()

            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproduct',[
            'pagetitle' => "Add Product",
            'kayus'=> Kayu::all(),
            'jenis'=> Jenis::all(),
            'warnas'=>Warna::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $this -> validate($request, [
            'name' => 'required|string|max:155',
            'price' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image',
        ]);
        Product::create([
            'name' => $request ->name,
            'warna_id' => $request ->warna_id,
            'kayu_id' => $request ->kayu_id,
            'jenis_id' => $request ->jenis_id,
            'price' => $request ->price,
            'deskripsi' => $request ->deskripsi,
            'image' => $request ->file('image')->store('product', 'public'),


        ]);

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("editproducts", [
            "product"=>Product::findOrFail($id)
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            "name"=>$request->name,
            "price"=>$request->price,
            "deskripsi"=>$request->deskripsi,
        ]);

        return redirect("/admin/listproduct");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect("/admin/listproduct");
    }
}
