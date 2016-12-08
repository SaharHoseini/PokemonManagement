<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

use App\Trainer;
use App\Pokemon;
use Validator;
use Session;

class SearchController extends Controller
{
        public function show($name){

                $rules = array(
                        'name' => 'required',);
                $validator = Validator::make(Input::all(), $rules);

               //process the login
           if ($validator->fails()) {
            
	    Session::flash('message','Nothing To Search!'); 
            return redirect()->back();
                
              }

          else {

            $newpokemon = Pokemon::where('name', '=', Input::get('name'))->first();  
            if ($newpokemon == '')
		{
            Session::flash('message','No Record Found For The Pokemon You Entered! '); 
	    return redirect()->back();

		}
	    else
		{
            Session::flash('message','Your Search Result');
	    return Redirect::to('search/' .$newpokemon); 

		
          	}
		
           }
       }
}
