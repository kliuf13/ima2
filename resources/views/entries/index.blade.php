@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>All your entries is here</h2></div>

                    @if(count($entries) > 0 )
                        <table>
                            <tr>
                                <th>Project name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($entries as $entry)
                                <tr>
                                    <th><a href="/entries/{{$entry->id}}">{{$entry->companyName}}</a></th>
                                    <th><a href="/entries/{{$entry->id}}/edit">Edit</a></th>
                                    <th>{!! Form::open(['action' => ['EntriesController@destroy', $entry->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete')}}
                                        {!! Form::close()!!}</th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No Entries found</p>
                    @endif
                    <br>
                    <hr>
                    <br>
                    <h3> <a href="entries/create">Submit new Entry</a></h3>
                </div>
            </div>
        </div>
    </div>
@endsection
