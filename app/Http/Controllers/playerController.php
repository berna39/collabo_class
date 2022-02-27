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

    public function store_player(Request $request){

        $request->validate([
            'noms' => 'required',
            'date_naissance' => 'required',
            'nationalite' => 'required',
            'poids' => 'required',
            'taille' => 'required',
            'biographie' => 'required',
        ]);

        DB::table('players')->insert([
            'noms' => $request->noms,
            'date_naissance' => $request->date_naissance,
            'nationalite' => $request->nationalite,
            'poids' => $request->poids,
            'taille' => $request->taille,
            'biographie' => $request->biographie,
        ]);

        return 'okey store';
    }
}
