<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addjenis', [
            'jenis'=>Jenis::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addjenis',[
            'pagetitle' => "Add Jenis",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJenisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJenisRequest $request)
    {
        $this -> validate($request, [
            
            'jenis'=>'required',
            
        ]);
        Jenis::create([
          
            'jenis'=>$request ->jenis,
            
        ]);

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('detail', [
            'jenis' => Jenis::showProduct($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("editjenis", [
            "jenis"=>Jenis::findOrFail($id)
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenisRequest  $request
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenisRequest $request, $id)
    {
        $jenis = Jenis::findOrFail($id);

        $jenis->update([
            "jenis"=>$request->jenis,
        ]);

        return redirect("/admin/listjenis");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = Jenis::findOrFail($id);

        $jenis->delete();

        return redirect("/admin/listjenis");
    }
}
