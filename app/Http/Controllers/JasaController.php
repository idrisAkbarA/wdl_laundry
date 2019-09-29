<?php

namespace App\Http\Controllers;
use App\jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jasas = jasa::all();
        return view('jasa')->with('jasas',$jasas);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->input();
        jasa::create(['nama_jasa'=>$form['nama_jasa'],'satuan'=>$form['satuan'], 'harga'=>$form['harga']]);
        $jasas = jasa::all();
        return view('jasa')->with('jasas', $jasas);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        $hasil = jasa::where('nama_jasa', $nama)->get();
        return response([$hasil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nama,Request $request)
    {
        $form = $request->input();
        
        jasa::where('nama_jasa',$nama)->update(['nama_jasa'=>$form['nama_jasa'],'satuan'=>$form['satuan'],'harga'=>$form['harga']]);

        $jasas = jasa::all();
                
        return view('jasa')->with('jasas', $jasas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nama)
    {
        jasa::where('nama_jasa',$nama)->delete();
        $jasas= jasa::all();
        return view('jasa')->with('jasas', $jasas);
    }
}
