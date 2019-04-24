@extends('layouts.app')

@section('content')
    <h1>Entry Page - {{$entry->companyName}}</h1>
            <div style="border: dashed 1px darkseagreen">
                <ul>
                    <li>{{$entry->firstName}}</li>
                    <li>{{$entry->lastName}}</li>
                    <li>{{$entry->projectTitle}}</li>
                    <li>{{$entry->companyName}}</li>
                    <li>{{$entry->siteURL}}</li>
                </ul>
            </div>
            <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $entry->user_id)
            <a href="/entries/{{$entry->id}}/edit">Edit Data</a>

            {!! Form::open(['action' => ['EntriesController@destroy', $entry->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete')}}
            {!! Form::close()!!}
        @endif
    @endif
@endsection

