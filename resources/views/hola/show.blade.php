@extends('layouts.master')

@section('content')
	<h3>This is Show Page</h3>
	    <h2>{{ $todolist->name}}</h2>
        <p>{{ $todolist->description}}</p>
    
@stop