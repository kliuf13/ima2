@extends('layouts.app')

@section('content')
    <h1>Edit Entry</h1>

    {{--{{ Form::open(array('action' => array(['EntriesController@update', $entry->id],'method' => 'POST' ))) }}--}}
    {!! Form::open(['action' => ['EntriesController@update', $entry->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('firstName', 'First Name')}}
        {{Form::text('firstName', $entry->firstName, ['class' => '', 'placeholder' => 'Your First Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('lastName', 'Last Name')}}
        {{Form::text('lastName', $entry->lastName, ['class' => '', 'placeholder' => 'Your Last Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('companyName', 'Company Name')}}
        {{Form::text('companyName', $entry->companyName, ['class' => '', 'placeholder' => 'Company Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('projectTitle', 'Project Name')}}
        {{Form::text('projectTitle', $entry->projectTitle, ['class' => '', 'placeholder' => 'Project Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('siteURL', 'Site URL')}}
        {{Form::text('siteURL', $entry->siteURL, ['class' => '', 'placeholder' => 'URL'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    <div class="form-group">
        {{Form::submit('Submit')}}

    </div>


    {!! Form::close()!!}

@endsection