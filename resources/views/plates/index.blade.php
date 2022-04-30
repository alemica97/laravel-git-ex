@extends('template')

@section('content')

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Prezzo</th>
            <th>Ingredienti</th>
            <th>Categoria</th>
            <th>Link</th>
        </tr>
    </thead>

    <tbody>
        @foreach($plates as $plate)
        <tr>
            <th>{{$plate->id}}</th>
            <td>{{$plate->title}}</td>
            <td>{{$plate->price}}</td>
            <td>{{$plate->description}}</td>
            <td>{{$plate->category}}</td>
            <td> <button> <a href="{{route('plates.show', $plate->id)}}">Visualizza</a></button> </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection