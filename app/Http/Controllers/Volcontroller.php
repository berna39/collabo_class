<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Volcontroller extends Controller
{ 
     public function index(){
        $vols = \DB::select("SELECT * FROM vols order by id DESC");
        return view('vol', compact('vols'));
    }

    public function store(Request $request){
        $request-> validate ([
            'avion'=>'required',
            'depart'=>'required',
            'destination'=>'required',
            'dates'=>'required',
            'description'=>'required',
        
        ]);

        \DB::table('vols')->insert([
            'avion'=>$request->avion,
            'depart'=>$request->depart,
            'destination'=>$request->destination,
            'dates'=>$request->dates,
            'description'=>$request->description,
        ]);
    
        return response()->json(["message"=>"insertion avec succes"]);
    }

    Public function edit($id){
        $data=\DB::select("SELECT * FROM vols WHERE id=?",[$id]);
        $vol=$data[0];
        return view('edit_vol',\compact('vol'));
    }

    public function update(Request $request){
        \DB::update('UPDATE vols SET avion = ? , depart = ? , destination = ? , dates = ?, description = ?  WHERE id = ?',[$request->avion,$request->depart,$request->destination,$request->dates,$request->description,$request->id]);
        return redirect()->route('vol')->with('message', 'modifier  avec succes');
    }

    public function destroy($id){
        \DB::delete("DELETE FROM vols WHERE id=?",[$id]);
        return redirect()->Route('vol')->with('message','supression reussi  avec succes');
    }
}
