<?php

namespace App\Http\Controllers;
use App\belanja;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function belanja(Request $request){
        return response()->json($request);
    }
}
