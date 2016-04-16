@extends('layouts.master')

@section('content')
	<h3>This is Show Page</h3>
	@foreach ($todolists as $todolist)
                    <h2>{{ $todolist->name}}</h2>
                    <p>{{ $todolist->description}}</p>
                @endforeach
@stop