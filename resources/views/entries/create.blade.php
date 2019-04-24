@extends('layouts.app')

@section('content')
    <h1>Submit Entry</h1>


    {{ Form::open(array('action' => array('EntriesController@store','method' => 'POST' ))) }}
    <div class="form-group">
        {{Form::label('firstName', 'First Name')}}
        {{Form::text('firstName', '', ['class' => '', 'placeholder' => 'Your First Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('lastName', 'Last Name')}}
        {{Form::text('lastName', '', ['class' => '', 'placeholder' => 'Your Last Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('companyName', 'Company Name')}}
        {{Form::text('companyName', '', ['class' => '', 'placeholder' => 'Company Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('projectTitle', 'Project Name')}}
        {{Form::text('projectTitle', '', ['class' => '', 'placeholder' => 'Project Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('siteURL', 'Site URL')}}
        {{Form::text('siteURL', '', ['class' => '', 'placeholder' => 'URL'])}}
    </div>

    <div class="form-group">
        {{Form::submit('Submit')}}

    </div>


    {{ Form::close() }}

@endsection