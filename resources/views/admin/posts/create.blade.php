@extends('layouts.admin')

@section('content')

    <h1> Create Post </h1>
    <div class="rows">
    {!! Form::open(['method'=>'Post','action'=>'AdminPostsController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title: ') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Gategory: ') !!}
        {!! Form::select('category_id',[1=>'PHP',0=>'JAVA',2=>'Python'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Photo: ') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Description: ') !!}
        {!! Form::textarea('body',NULL,['class'=>'form-control','rows'=>5]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>
        {!! Form::close() !!}
    </div>
    <div class="rows">
        @include('includes.form_error')
    </div>


@stop