<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index(){
        $voiture = \DB::select("SELECT * FROM voiture order by id DESC");
        return view('voiture',compact('voiture'));
    }

    public function store(Request $request){

            $request->validate([
                'marque' => 'required',
                'modele' => 'required',
                'annee' => 'required',
                'moteur' => 'required',
                'date_sortie' => 'required',
                'description' => 'required'
            ]);

            \DB::table('voiture')->insert([
                'marque' => $request->marque,
                'modele' => $request->modele,
                'annee' => $request->annee,
                'moteur' => $request->moteur,
                'date_sortie' => $request->date_sortie,
                'description' => $request->description,
            ]);

            return response()->json(['message' => 'inserted succes']);   
        }

    public function edit($id){
        $data = \DB::select("SELECT * FROM voiture WHERE id = ?", [$id]);
        $voiture = $data[0];
        return view('editVoiture',compact('voiture'));
    }

    public function update(Request $request){
        \DB::update('UPDATE voiture set marque = ?,modele = ?,annee = ?,moteur = ?,date_sortie = ?, description = ? where id = ?',[$request->marque, $request->modele, $request->annee, $request->moteur, $request->date_sortie, $request->description, $request->id]);
        return redirect()->route('aficher_voiture');
    }
    public function destroy($id){
        \DB::delete('DELETE FROM voiture where id = ?', [$id]);
        return redirect()->route('aficher_voiture');
    }
}
