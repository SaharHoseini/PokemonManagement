<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trainer;

class PokemonsController extends Controller
{
    public function index($id){

	$trainer_name = Trainer::find($id);
	return view('pokemons.index', compact('trainer_name'));

}
}
