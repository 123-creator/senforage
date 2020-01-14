<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use App\User;

class UtilisateurController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }
    
    public function show()
    {

        return view("auth.register");
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'email'=>'requered',
            'password'=>'required',

        ]) ;
 
     $utilisateur = new User();
     $utilisateur->name = $request->input('name');
     $utilisateur->email = $request->input('email');
     $utilisateur->password = $request->input('password');
     $utilisateur->save();
     return view("Home.blade.php");
    
 
     
        
 
    }
}
