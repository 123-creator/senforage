<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consommation;
use App\Compteur;
class ConsommationController extends Controller
{
   public function index()
   {
      $compteur = \App\Compteur::pluck('numC','num_compteur');
   return view('Consommation.index', compact('compteur'));
   }
   public function show()
   {
    $con = Consommation::OrderBy('created_at','DESC')->get();
    return view('Consommation.list',compact('con'));

   }

   public function store(Request $request)
   {  
      $request->validate([
         'cons'=>'required',
         'datecons'=>'required',
         'numC'=>'required',
         

      ]) ; 

    $consommation= new Consommation();
    $consommation->cons = $request->input('cons');
    $consommation->datecons = $request->input('datecons');
    $consommation->numC = $request->input('numC');
    $consommation->save();
    return redirect()->to('Consommation/list');

    
       

   }

   public function edit($id)
   {
      $consommation= \App\Consommation::where('idcons',$id)->first();
      return view('Consommation.edit',compact('consommation'));
   }


   public function update(Request $request, $id)

   {
     
      $consommation=\App\Consommation::where('idcons', $id)->first();
      if($consommation)
      {
         $consommation->update([
           'cons' => $request->input('cons'), 
           'datecons' => $request->input('datecons'),  
           'numC' => $request->input('numC'),  
           
         ]);
         
         return redirect()->to('Consommation/list');

         
      }
      

   }


   public function destroy($id)
   {
   
      $consommation = Consommation::where('idcons',$id)->first();
      if($consommation)
         $consommation->delete();
         return redirect()->back();
    }
}
