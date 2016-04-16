<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;
use todoparrot\Todolist;
use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class WelcomeController extends Controller
{
	public function index()
	{	
		$todolists = Todolist::all();
		return view('hola.hola', compact('todolists'));
	}

	public function show($id)
	{	
		
		$todolist = Todolist::find($id);
		return view('hola.show', compact('todolist'));

	}

	public function create()
	{
		return view('hola.create');
	}

	public function store()
	{
	}
}
