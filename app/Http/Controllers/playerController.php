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

        return redirect()->route('index')->with('message', 'Inserted successfully');
    }

    public function edit_player($id){
        $data = DB::select("SELECT * FROM players WHERE id=?",[$id]);
        $player = $data[0];
        return view('edit_player', compact('player'));
    }

    public function update_player(Request $request){
        $request->validate([
            'noms' => 'required',
            'date_naissance' => 'required',
            'nationalite' => 'required',
            'poids' => 'required',
            'taille' => 'required',
            'biographie' => 'required',
        ]);

        DB::update("UPDATE players SET noms=?, date_naissance=?, nationalite=?, poids=?, taille=?, biographie=? WHERE id=? , [$request->noms, $request->date_naissance, $request->nationalite, $request->poids, $request->taille, $request->biographie, $request->id]");
        return redirect()->route('edit_player')->with('message', 'Updated successfully');
    }

    public function destroy_player($id){
        $deleted = DB::table('players')->where('id', '=', $id)->delete();
        return redirect()->route('index')->with('messageDelete', 'Player deleted successfully');
    }
}
