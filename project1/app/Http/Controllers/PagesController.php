<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {
	public function home() {
		$people = ['Matt', 'Berry', 'Jhon'];
		return view('welcome', compact('people'));
	}
}
