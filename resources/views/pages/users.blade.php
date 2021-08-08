@extends('template/index')
@section('content')
    @foreach ($users as $user)
        <p>{{$user->id}}</p>
        <p>{{$user->nom}}</p>
        <p>{{$user->age}}</p>
    @endforeach
@endsection