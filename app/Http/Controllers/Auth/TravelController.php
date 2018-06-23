<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Models\UsersViagem;
use Models\Viagem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $user = \Auth::user();

        return view('auth/edit')->with("user", $user);
    }
    
    public function update(Request $request)
    {
        $inputs = $request->all();

        $user = \Auth::user();
        
        $user->name = $inputs['name'];
    
        $user->email = $inputs['email'];
    
        $user->save();
    
        return \Redirect::route('home');
    }
}