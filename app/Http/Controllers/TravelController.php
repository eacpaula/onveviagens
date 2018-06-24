<?php

namespace App\Http\Controllers;

use App\User;
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

        return view('travel/index')->with("travels", $travels);
    }
    
    public function edit($id)
    {
        $travel = \Viagem::find($id);

        return view('travel/edit')->with("travel", $travel);
    }

    public function list(Request $request)
    {
        $travels = \Viagem::where('destaque', 1);
        
        return response()->json($travels);
    }

    public function find($id, Request $request)
    {
        $travel = \Viagem::find($id);
        
        return response()->json($travel);
    }
}