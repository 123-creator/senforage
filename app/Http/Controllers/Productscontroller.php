<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class Productscontroller extends Controller
{

    public function Produit()
     {
         $u = Utilisateur::all();
        return view('Products.Produit',compact('u'));
        // return View("Products.Produit");

    }

  



    // public function index()
    // {
    //     return "je suis le produits index";

    // }

    // public function show($id)
    // {
    //     return "je suis la page de la categorie $id";

    // }
    

}


