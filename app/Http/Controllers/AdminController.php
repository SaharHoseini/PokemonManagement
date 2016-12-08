<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pokemon;

class AdminController extends Controller
{
  public function index()
     {
         $pokemons = Pokemon::all();
        return view('admin.index', compact('pokemons'));
    }

}
