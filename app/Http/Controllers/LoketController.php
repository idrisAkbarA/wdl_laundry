<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loket;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class loketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use RegistersUsers;
    public function index()
    {
        $lokets = loket::all();
        return view('daftarLoket')->with('lokets', $lokets);
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
        //print_r($form['nama']);
        $defaultPassword = $form['nama']."123123";
        User::create(['name'=>$form['nama'], 'email'=>$form['email'],'password'=>Hash::make($defaultPassword)]);
        loket::create(['nama'=>$form['nama'],'alamat'=>$form['alamat'],'hp'=>$form['hp'],'status'=>'aktif']);
        $lokets = loket::all();
        return view('daftarLoket')->with('lokets', $lokets);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        loket::where('nama',$nama)->delete();
        $lokets = loket::all();
        return view('daftarLoket')->with('lokets', $lokets);

    }
}
