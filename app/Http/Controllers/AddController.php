<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pokemon;
use Session;

class AddController extends Controller
{
	
      protected function create(array $data)
    {
        $user= Pokemon::create([
            'name' => $data['name'],
		        ]);

        $pokemon = new Pokemon($data);
        $pokemon->save([$user]);        
        return $user;
    }

public function store($name){

	
	$pokemon = new Pokemon;
	$pokemon->name = Input::get('name');
	$pokemon->trainer_id = Input::get('trainer_id');
	$pokemon->save();
	Session::flash('message', 'New Pokemon Successfully Added!');
	return redirect()->route('admin.index');
	//$pokemons = Pokemon::all();
	//return view('admin.index', compact('pokemons'));
	

  }
}
