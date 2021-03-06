@extends('layouts.app')

@section('content')
    <h1>Edit Venue</h1>


    {!! Form::open(['action' => ['VenuesController@update', $venue->id],'method' => 'POST']) !!}
    <div class="well">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $venue->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::text('description', $venue->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
                </div>
                <div class="form-group">
                    {{Form::label('place', 'Place')}}
                    {{Form::text('place', $venue->place, ['class' => 'form-control', 'placeholder' => 'Place'])}}
                </div>
            </div>
        </div>
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection