<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Yoko;

class YokoController extends Controller
{
    public function index(){
        $items = DB::select('select * from koko');
        return view('yoko', compact('items'));
    }
}
