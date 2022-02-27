<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class livrecontrolleur extends Controller
{
   
    public function index()
    {
        $liv=\DB:: select ("SELECT * FROM livres");
        return view ('livre',compact('liv'));
    
    }
    public function store (Request $request)
    {

    
        $request->validate([
            'titre'=>'required',
            'annee'=>'required',
            'edition'=>'required',
            'auteur'=>'required',
            'editeur'=>'required',
            'resume'=>'required',
            'date_publication'=>'required',
            
        ]);
        
       \DB::table('livres')->insert([
    'titre'=>$request->titre,
    'annee'=>$request->annee,
    'edition'=>$request->edition,
    'auteur'=>$request->auteur,
    'editeur'=>$request->editeur,
    'resume'=>$request->resume,
    'date_publication'=>$request->date_publication
 
     ]);

     return Response()->json([
        "message"=>"insertion sussess"
    ]);
         
    
         
    }
 public function edit($id)
 {
     $data=\DB::select("SELECT * FROM livres WHERE id= ?",[$id]);
     $liv=$data[0];
     return view('edit_livre',\compact('liv'));

 }

public function update(Request $request)
{
    \DB::update("UPDATE livres SET titre=? , annee=?, edition=? , auteur=? ,editeur=? , resume=?,date_publication=?  WHERE id=? ", [$request->titre,$request->annee, $request->edition,$request->auteur,$request->editeur,$request->resume,$request->date_publication,$request->id]);
    
    return redirect()->route('livre')->with('modif','modifier avec success');

}
public function delete($id)
{
    \DB::update("DELETE FROM  livres  WHERE id=? ",[$id]);
    
    return redirect()->route('livre')->with('destroyed','supression avec success');

}
    //
}
