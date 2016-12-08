<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// Sahar - Gaurd setup
use Illuminate\Support\Facades\Auth;
use App\Trainer;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
	
    	//$registered = \App\Trainer::find('hometown');
         //if ($registered != "")
	//{
        //$trainers = \App\Trainer::all();
	//return view('submit.index', compact('trainers'));
	//}
	//else

        protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		 $this->middleware('guest', ['except' => 'logout']);
    }
	//public function edit($id){
//		$hasProfile = Trainer::find($id);
//		if($hasProfile != '' && $hasProfile->hometown != '')

//			{
  //				return view('trainers.index', compact('trainers'));
//			}
  //}
}
?>
