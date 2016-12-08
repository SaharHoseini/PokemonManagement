<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pokemon;
use Session;
use Trainer;
class DeleteController extends Controller
{
    public function destroy($id)
    {     
        $pokemon = Pokemon::find($id);
        $pokemon->delete();

        Session::flash('message', 'Successfully deleted the pokemon!');
        $pokemons = Pokemon::all();
        return view('admin.index', compact('pokemons'));
    }
}
