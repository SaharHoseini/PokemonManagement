<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trainer;

class TrainersController extends Controller
{
    public function index(){

	$trainers = Trainer::all();
	return view('trainers.index', compact('trainers'));
     }
}
