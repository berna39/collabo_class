<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    public function index(){
        $players = DB::select("SELECT * FROM players ORDER BY id DESC");
        return view('player', compact('players'));
    }

    public function store(Request $request){

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

    public function edit($id){
        $data = DB::select("SELECT * FROM players WHERE id=?",[$id]);
        $player = $data[0];
        return view('edit_player', compact('player'));
    }

    public function update(Request $request){
        $request->validate([
            'noms' => 'required',
            'date_naissance' => 'required',
            'nationalite' => 'required',
            'poids' => 'required',
            'taille' => 'required',
            'biographie' => 'required',
        ]);
            $id = $request->id;
            $noms = $request->noms;
            $date_naissance = $request->date_naissance;
            $nationalite = $request->nationalite;
            $poids = $request->poids;
            $taille = $request->taille;
            $biographie = $request->biographie;

        DB::table('players')->where('id', $id)->update([
            'noms' => $request->noms,
            'date_naissance' => $request->date_naissance,
            'nationalite' => $request->nationalite,
            'poids' => $request->poids,
            'taille' => $request->taille,
            'biographie' => $request->biographie,
        ]);

        return redirect()->route('index')->with('messageEdit', 'Updated successfully');
    }

    public function destroy($id){
        $deleted = DB::table('players')->where('id', '=', $id)->delete();
        return redirect()->route('index')->with('messageDelete', 'Player deleted successfully');
    }
}
