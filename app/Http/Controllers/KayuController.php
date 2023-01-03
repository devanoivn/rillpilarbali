<?php

namespace App\Http\Controllers;

use App\Models\Kayu;
use App\Http\Requests\StoreKayuRequest;
use App\Http\Requests\UpdateKayuRequest;

class KayuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addkayu', [
            'kayus'=>Kayu::paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addkayu',[
            'pagetitle' => "Add Kayu",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKayuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKayuRequest $request)
    {
        $this -> validate($request, [
            
            'kayu'=>'required',
            
        ]);
        Kayu::create([
          
            'kayu'=>$request ->kayu,
            
        ]);

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kayu  $kayu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('detail', [
            'kayu' => Kayu::showProduct($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kayu  $kayu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("editkayu", [
            "kayu"=>Kayu::findOrFail($id)
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKayuRequest  $request
     * @param  \App\Models\Kayu  $kayu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKayuRequest $request, $id)
    {
        $kayu = Kayu::findOrFail($id);

        $kayu->update([
            "kayu"=>$request->kayu,
        ]);

        return redirect("/admin/listkayu");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kayu  $kayu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kayu = Kayu::findOrFail($id);

        $kayu->delete();

        return redirect("/admin/listkayu");
    }

}
