@extends('layouts.master')

@section('content')
                <h3>This is Home Page</h3>
                <a href="{{route('hola.create')}}">Goto Create Page</a>

                @foreach ($todolists as $todolist)
                    <h2>{{ $todolist->name}}</h2>
                    <p>{{ $todolist->description}}</p>
                @endforeach
@stop