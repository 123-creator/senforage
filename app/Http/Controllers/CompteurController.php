<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compteur;

class CompteurController extends Controller
{
    public function index()
    {
    //return  view("compteur.index");
    $abonnement = \App\Abonnement::pluck('descriptif','numA');
   return view('compteur.index', compact('abonnement'));

 
    }
    public  function show()
    {
        $co = Compteur::OrderBy('created_at','DESC')->get();
        return view('compteur.compteur',compact('co'));
    }

    public function store(Request $request)
   {  
      $request->validate([
         'num_compteur'=>'required',
         'consomation'=>'required',
         'numA'=>'required',
         
      ]) ; 
  

    $compteur= new Compteur();
    $compteur->num_compteur = $request->input('num_compteur');
    $compteur->consomation = $request->input('consomation');
    $compteur->numA = $request->input('numA');
    $compteur->save();
    return redirect()->to('compteur/compteur');

    
       

   }

    public function edit($id)
   { 
      $compteur= \App\Compteur::where('numC',$id)->first();
      return view('compteur.edit',compact('compteur'));
   }

   public function update(Request $request,$id)

   {
     
      $compteur=\App\Compteur::where('numC', $id)->first();
      if($compteur)
      {
         $compteur->update([
           'num_compteur' => $request->input('num_compteur'), 
           'consomation' => $request->input('consomation'),  
           'numA' => $request->input('numA'),  
           


         ]);
         return redirect()->to('compteur/compteur');

      }

   }

   public function destroy($id)
   {
   
      $compteur = Compteur::where('numC',$id)->first();
      if($compteur)
         $compteur->delete();
         return redirect()->back();
    }
}
