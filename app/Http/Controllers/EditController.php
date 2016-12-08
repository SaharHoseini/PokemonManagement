<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Trainer;
use App\Pokemon;
use App\User;
use  Validator;
use Session;

class EditController extends Controller
{
        public function index(){

        $trainers = Trainer::all();
	$pokemons = Pokemon::all();
        return view('edit.index', compact('trainers','pokemons'));
     }
	public function show($id){

		$rules = array(
			'name' => 'required',
			'email'=> 'required|email',
                        'hometown',
                        'pokemon',
			'admin'=> 'required',
                       );
                $validator = Validator::make(Input::all(), $rules);

               //process the login
           if ($validator->fails()) {
                Session::flash('message','Error! Please Review Your Inputs!');
		 return Redirect::to('edit/')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
               }
            
          else {
	  
            $trainer = Trainer::find($id);
            $trainer->name  = Input::get('name');
            $trainer->email = Input::get('email');
            $trainer->hometown = Input::get('hometown');
            $trainer->admin = Input::get('admin');
            $newpokemon = Pokemon::where('name', '=', Input::get('pokemon'))->first();  
            if ($newpokemon == '') {  
                 
	          $trainer->save();
	          $user = User::find($id);
            	  $user->name = Input::get('name');
                  $user->email = Input::get('email');
      	          $user->admin = Input::get('admin');
            	  $user->save();
	
	          Session::flash('message','Successfully Updated Trainers Info!');
                  $trainers = Trainer::all();
	          $pokemons = Pokemon::all();
       		  return view('edit.index', compact('trainers','pokemons'));

               }
           else{
   
	        $newpokemon->trainer_id = $trainer->id;
                $newpokemon->save();

                  $trainer->save();
                  $user = User::find($id);
                  $user->name = Input::get('name');
                  $user->email = Input::get('email');
                  $user->admin = Input::get('admin');
                  $user->save();

                  Session::flash('message','Successfully Updated Trainers Info!');
                  $trainers = Trainer::all();
                  $pokemons = Pokemon::all();
                  return view('edit.index', compact('trainers','pokemons'));
            }
	}
   }
}
