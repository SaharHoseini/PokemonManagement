<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\User;
use App\Trainer;
use App\Pokemon;
use Validator;
use Session;
class SubmitController extends Controller
{
	 protected  $p;
    public function update($id){

	$rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'hometown' => 'required',
	    'pokemon',
        );
       $validator = Validator::make(Input::all(), $rules);

         //process the login
        if ($validator->fails()) {
            return Redirect::to('profile/' . $id)
                ->withErrors($validator)
                ->withInput(Input::except('password'));
     } else {
            // store
            $trainer = Trainer::find($id);
            $trainer->name  = Input::get('name');
            $trainer->email = Input::get('email');
            $trainer->hometown = Input::get('hometown');
            $trainer->save();

	    $user = User::find($id);
	    $user->name = Input::get('name');
	    $user->email = Input::get('email');
	    $user->profile = 1;
	    $user->save();

	    $newpokemon = Pokemon::where('name', '=', Input::get('pokemon'))->first();  
	    if ($newpokemon == '')
		{  
            Session::flash('message','Your Profile Successfully updated!Click Home to Proceed . . .'); 
            $trainers = Trainer::all();
            return Redirect::to('profile/' . $id);
		}	
	   else {
	    $newpokemon->trainer_id = $trainer->id;
	    $newpokemon->save();
            Session::flash('message','Your Profile Successfully updated!Click Home to Proceed . . .'); 
            $trainers = Trainer::all();
            return Redirect::to('profile/' . $id);
               }
      }

  }
  
}
