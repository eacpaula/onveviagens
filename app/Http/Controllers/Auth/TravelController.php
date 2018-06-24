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
        $travels = \Viagem::where('destaque', 1);

        return view('auth/travel/index')->with("travels", $travels);
    }
    
    public function edit($id)
    {
        $travel = \Viagem::find($id);

        return view('auth/travel/edit')->with("travel", $travel);
    }
}