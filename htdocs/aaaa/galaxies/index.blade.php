@extends('layout')

@section('content')
    <h1>Galaxies</h1>
    <a href="{{ route('galaxies.create') }}">Add Galaxy</a>
    <ul>
        @foreach($galaxies as $galaxy)
            <li>
                <a href="{{ route('galaxies.show', $galaxy->id) }}">{{ $galaxy->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
