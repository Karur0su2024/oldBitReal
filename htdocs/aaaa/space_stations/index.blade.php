@extends('layout')

@section('content')
    <h1>Space Stations</h1>
    <a href="{{ route('space_stations.create') }}">Add Space Station</a>
    <ul>
        @foreach($space_stations as $space_station)
            <li>
                <a href="{{ route('space_stations.show', $space_station->id) }}">{{ $space_station->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
