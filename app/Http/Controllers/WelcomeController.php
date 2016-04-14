<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
	public function index()
	{	/*
		$roll = 'San Juan Vacation';
		return view('hola.hola')->with($roll);
		*/
		$fname = "Nirvik";
		$lname = "Khanal";
		return view('hola.hola', compact('fname', 'lname'));
	}
}
