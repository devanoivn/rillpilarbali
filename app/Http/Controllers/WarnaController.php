<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use App\Http\Requests\StoreWarnaRequest;
use App\Http\Requests\UpdateWarnaRequest;
use Illuminate\Console\View\Components\Warn;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addwarna', [
            'warnas'=>Warna::paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addwarna',[
            'pagetitle' => "Add Warna",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWarnaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWarnaRequest $request)
    {
        $this -> validate($request, [
            
            'warna'=>'required',
            
        ]);
        Warna::create([
          
            'warna'=>$request ->warna,
            
        ]);

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        return view('detail', [
            'warna' => Warna::showProduct($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("editwarna", [
            "warna"=>Warna::findOrFail($id)
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWarnaRequest  $request
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWarnaRequest $request,$id)
    {
        $warna = Warna::findOrFail($id);

        $warna->update([
            "warna"=>$request->warna,
        ]);

        return redirect("/admin/listwarna");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warna = Warna::findOrFail($id);

        $warna->delete();

        return redirect("/admin/listwarna");
    }
}
