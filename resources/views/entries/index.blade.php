@extends('layouts.app')

@section('content')
    <h1> Ima Winners Gallery</h1>
    @if(count($entries) > 1 )
        @foreach($entries as $entry)
            <div style="border: dashed 1px darkseagreen">
                <h2> Winner - {{$entry->companyName}} </h2>
                <ul>
                    <li>{{$entry->firstName}}</li>
                    <li>{{$entry->lastName}}</li>
                    <li>{{$entry->projectTitle}}</li>
                    <li>{{$entry->companyName}}</li>
                    <li>{{$entry->siteURL}}</li>
                </ul>
            </div>

        @endforeach
    @else
        <p>No Winners found</p>
    @endif
@endsection

