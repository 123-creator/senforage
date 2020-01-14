<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
   public function index()
   {
   return  view("Client.index");

   }
   public function show()
   {
      $c = Client::OrderBy('created_at','DESC')->get();
      return view('Client.list',compact('c'));
   }


   public function store(Request $request)
   {  
     
      $request->validate([
         'nomfamille'=>'required',
         'nomchef'=>'required',
         'village'=>'required',
         'adresse'=>'required',
         'tel'=>'required',

      ]) ; 

    $client= new Client();
    $client->nomfamille = $request->input('nomfamille');
    $client->nomchef = $request->input('nomchef');
    $client->village = $request->input('village');
    $client->adresse = $request->input('adresse');
    $client->tel = $request->input('tel');
    $client->save();
    return redirect()->to('Client/list');

    
       

   }
   public function edit($id)
   {
      $this->authorize('admin');
      $client= \App\Client::where('idC',$id)->first();
      return view('Client.edit',compact('client'));
   }

   
   public function update(Request $request, $id)

   {
     
      $client=\App\Client::where('idC', $id)->first();
      if($client)
      {
         $client->update([
           'nomfamille' => $request->input('nomfamille'), 
           'nomchef' => $request->input('nomchef'),  
           'village' => $request->input('village'),  
           'adresse' => $request->input('adresse'),  
           'tel'     => $request->input('tel'),
         ]);
         
         return redirect()->to('Client/list');

         
      }
      

   }

   public function destroy($id)
         {
         
            $client = Client::where('idC',$id)->first();
            if($client)
               $client->delete();
               return redirect()->back();
               
  

          }

}
