@extends('template')

@section('content')

<main>
    <h1>{{$plates->title}}</h1>
    <p>{{$plates->description}}</p>
    <p>{{$plates->price}}</p>
    <p>{{$plates->category}}</p>
</main>

@endsection

