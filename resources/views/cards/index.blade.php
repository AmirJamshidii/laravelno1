@extends('layout')

@section('content')

    <h1> all cards </h1>

    @foreach ($cards as $card)
        <div>
        <a> href="/card/{{ $card->id }}">{{ $card->title }}</a> 
        </div>
    @endforeach
@stop

