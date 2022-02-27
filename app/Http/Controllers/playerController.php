<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class playerController extends Controller
{
    public function index(){
        $players = DB::select("SELECT * FROM players ORDER BY id DESC");
        return view('player', compact('players'));
    }
}
