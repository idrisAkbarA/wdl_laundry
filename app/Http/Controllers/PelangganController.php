<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = pelanggan::all();
        return view('pelanggan')->with('pelanggans', $pelanggans);
    }

    public function autoComplete(Request $request){
        $searchquery = $request->searchquery;
        $data = pelanggan::where('nama','like','%'.$searchquery.'%')->get();
        return response()->json($data);
    }
    public function autoCompleteHP(Request $request){
        $searchquery = $request->searchquery;
        $data = pelanggan::where('id','like','%'.$searchquery.'%')->get();
        return response()->json($data);
    }

}
