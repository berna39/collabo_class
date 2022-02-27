<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(){
        $agent = \DB::select("SELECT * FROM agent order by id DESC");
        return view('agents', compact('agent'));
    }

    public function store(Request $request){
        $request->validate([
            'noms'=>'required',
            'sexe'=>'required',
            'date_naissance'=>'required',
            'poste'=>'required',
            'salaire'=>'required',
            'biographie'=>'required'
           
        ]);

        \DB::table('agent')->insert([
            'noms'=>$request->noms,
            'sexe'=>$request->sexe,
            'date_naissance'=>$request->date_naissance,
            'poste'=>$request->poste,
            'salaire'=>$request->salaire,
            'biographie'=>$request->biographie
        ]);

        return \redirect()->route('agents')->with('message','Inserer avec success');
    }

    public function edit($id){
        $data = \DB::select("SELECT * FROM agent WHERE id= ?",[$id]);
        $agent = $data[0];
        return view('edit_agent', compact('agent'));
    }

    public function update(Request $request){        
        \DB::update("UPDATE agent set noms = ?, sexe = ?,date_naissance= ?,poste= ?,salaire= ?,biographie= ?  WHERE id= ?",[$request->noms,$request->sexe,$request->date_naissance,$request->poste,$request->salaire,$request->biographie,$request->id]);
        return \redirect()->route('agents')->with('message','modification reussi avec succes');;
    }

    public function destroy($id){
        \DB::delete("DELETE FROM agent WHERE id= ?",[$id]);
        return \redirect()->route('agents')->with('message','suppression reussi avec succes');
    }
}
