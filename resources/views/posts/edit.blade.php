@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>


    {!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST']) !!}
    <div class="well">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body  Text'])}}
                </div>
            </div>
        </div>
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection