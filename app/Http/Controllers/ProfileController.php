<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trainer;
use App\Pokemon;
class ProfileController extends Controller
{

	public function show($id)
    {
        //return view('profile.show', ['trainer' => Trainer::findOrFail($id)]);

	$trainer = Trainer::find($id);
	$pokemons = Pokemon::all();
	return view('profile.show', compact('trainer','pokemons'));
    }

	    public function index()
    {
       //$data['category'] = Category::find($id);
        //$data['topics'] = $category->getTopicPaginator();
        //$data['message'] = Message::find(1);

        //return View::make('category.index', $data);

	 //$data['pokemons'] = Pokemon::all(); 
	//$data['trainers] = Trainer::all();
        //return view('profile.index', compact(['trainers','pokemons']));
	//return View::make('profile.index', $data);
    }

}

