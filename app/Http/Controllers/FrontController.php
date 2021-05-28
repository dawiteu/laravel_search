<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $users = User::all(); 
        return view('welcome', compact('users')); 
    }

    public function search(Request $request){
        $q = $request->q;
        $users = User::where('prenom', 'LIKE', "%{$q}%")
                    ->orWhere('nom', 'LIKE', "%{$q}%")
                    ->orWhere('email', 'LIKE', "%{$q}%")->get();

        return view('welcome', compact('users')); 
    }
}
