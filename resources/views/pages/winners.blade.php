@extends('layouts.app')

@section('content')
    <h1>Here is IMA Winners</h1>
    <div>
        @foreach($entries as $entry)
            <ul>
                <li>{{$entry->companyName}}</li>
                <li>{{$entry->projectTitle}}</li>
                <li><a href="http://{{$entry->siteURL}}" target="_blank">{{$entry->siteURL}}</a></li>
                <li>Entry Status: <b>{{$entry->entryStatus}}</b></li>
            </ul>
            <br>
            <hr>
            <br>
        @endforeach
    </div>
@endsection