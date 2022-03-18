<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitCotroller extends Controller
{
    public function index(){
        $produits = \DB::select("SELECT * FROM produit order by id DESC");
        return view('produit', compact('produits'));
    }

    public function store(Request $request){
        
        \DB::table('produit')->insert([
            'designation' => $request->designation,
            'categorie' => $request->categorie,
            'prix' => $request->prix,
            'description' => $request->description,
            'temprerature' => $request->temperature
        ]);

        return response()->json(['message' => 'Inserted successfully']);
    }
    
    public function edit($id){
        $data= \DB::select("SELECT * FROM produit WHERE id=?",[$id]);
        $produit=$data[0];
        return view('edit_produit', \compact('produit'));
    }

    public function update(Request $request){
        \DB::update("UPDATE produit SET designation=?,categorie=?,prix=?,description=?,temperature=? WHERE id=?",[$request->designation,$request->categorie,$request->prix,$request->description,$request->temperature,$request->id]);
        return \redirect()->route('produit')->with('message','modification avec success');
    }

    public function destroy($id){
        \DB::delete("DELETE FROM produit WHERE id=?",[$id]);
        return \redirect()->route('produit')->with('message', 'suppression avec success');
    }
}
