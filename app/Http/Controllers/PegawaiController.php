<?php

namespace App\Http\Controllers;
use App\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = pegawai::all();
        return view('pegawai')->with('pegawais', $pegawais);
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
        $form= $request->input();
        pegawai::create(['nama'=>$form['nama'],'hp'=>$form['hp'],'loket'=>$form['loket']]);
        $pegawais = pegawai::all();
        return view('pegawai')->with('pegawais', $pegawais);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        $hasil = pegawai::where('nama', $nama)->get();
        return response([$hasil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nama, Request $request)
    {
        $form = $request->input();
        
        pegawai::where('nama',$nama)->update(['nama'=>$form['nama'],'hp'=>$form['hp'],'loket'=>$form['loket']]);

        $pegawais = pegawai::all();
                
        return view('pegawai')->with('pegawais', $pegawais);
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
        pegawai::where('nama',$nama)->delete();
    
        $pegawais = pegawai::all();
        return view('pegawai')->with('pegawais', $pegawais);
    }
}
