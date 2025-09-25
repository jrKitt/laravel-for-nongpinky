<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lab;

class LabController extends Controller
{
    public function index(){
        $Lab = new Lab();
        $items = $Lab::all();
        return view('lab', compact('items'));
    }
}
