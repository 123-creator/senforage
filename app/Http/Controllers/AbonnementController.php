<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnement;

class AbonnementController extends Controller
{
    public function index()
    {
      $client = \App\Client::pluck('adresse','idC');
      return view('Abonnement.index', compact('client'));

       
    }
    public function show()
    {
        $a = Abonnement::OrderBy('created_at','DESC')->get();
        return view('Abonnement.list',compact('a'));

    }

    public function store(Request $request)
   {  
     
      $request->validate([
         'dateA'=>'required',
         'descriptif'=>'required',
         'idC'=>'required',

      ]) ; 

    $abonnement= new Abonnement();
    $abonnement->dateA = $request->input('dateA');
    $abonnement->descriptif = $request->input('descriptif');
    $abonnement->idC = $request->input('idC');
    $abonnement->save();
    return redirect()->to('Abonnement/list');

    
       

   }

   public function edit($id)
   {
      $abonnement= \App\Abonnement::where('numA',$id)->first();
      return view('Abonnement.edit',compact('abonnement'));
   }


   public function update(Request $request, $id)

   {
     
      $abonnement=\App\Abonnement::where('numA', $id)->first();
      if($abonnement)
      {
         $abonnement->update([
           'dateA' => $request->input('dateA'), 
           'descriptif' => $request->input('descriptif'),  
           'idC' => $request->input('idC'),  
           
         ]);
         
         return redirect()->to('Abonnement/list');

         
      }
      

   }
   public function destroy($id)
   {
   
      $abonnement = Abonnement::where('numA',$id)->first();
      if($abonnement)
         $abonnement->delete();
         return redirect()->back();
    }

   
}
