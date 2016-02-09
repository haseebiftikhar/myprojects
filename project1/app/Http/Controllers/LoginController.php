<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
	public function home() {
		// 	//$cards = Login::table('login')->get();
		// 	$cards = login::all();
		// 	var_dump($cards);
		//return view('welcome')->with('cards', $cards);
		return view('login');

		// $results = DB::select('select * from login where id = :id', ['id' => 1]);
		// $cards = DB::table('login')->where('title', 'My New Card')->get();
		//return view('welcome', ['cards' => $cards]);
	}

}
