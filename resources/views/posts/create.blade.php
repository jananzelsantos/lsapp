@extends('layouts.app')

@section('content')
    <h1>create Posts</h1>


    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="well">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body  Text'])}}
                </div>
            </div>
        </div>
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection