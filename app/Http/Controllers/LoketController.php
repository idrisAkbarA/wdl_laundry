<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loket;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
//         DB::table('users')
// ->select('users.id','users.name','profiles.photo')
// ->join('profiles','profiles.id','=','users.id')
// ->where(['something' => 'something', 'otherThing' => 'otherThing'])
// ->get();
//         $lokets = loket::where('status','aktif')->where('name','')->get();
        $lokets =
                DB::table('lokets')
        ->select('lokets.nama','lokets.alamat','lokets.hp','lokets.created_at','users.email')
        ->join('users','users.name','=','lokets.nama')
        ->get();
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
        $lokets = loket::where('status','aktif')->get();
        $lokets =
                DB::table('lokets')
        ->select('lokets.nama','lokets.alamat','lokets.hp','lokets.created_at','users.email')
        ->join('users','users.name','=','lokets.nama')
        ->where('status','aktif')
        ->get();
        return view('daftarLoket')->with('lokets', $lokets);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        $hasil = loket::where('nama', $nama)->get();
        $email = User::where('name', $nama)->get(['email']);
        return response([$hasil,$email]);
        //
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
        User::where('name',$nama)->update(['name'=>$form["nama"],'email'=>$form['email']]);
        loket::where('nama',$nama)->update(['nama'=>$form['nama'],'alamat'=>$form['alamat'],'hp'=>$form['hp']]);
        $lokets =
                DB::table('lokets')
        ->select('lokets.nama','lokets.alamat','lokets.hp','lokets.created_at','users.email')
        ->join('users','users.name','=','lokets.nama')
        ->where('status','aktif')
        ->get();
        return view('daftarLoket')->with('lokets', $lokets);
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
        loket::where('nama',$nama)->update(['status'=>'tidak_aktif']);
        User::where('name',$nama)->delete();
        $lokets = loket::all();
        return view('daftarLoket')->with('lokets', $lokets);

    }
}
