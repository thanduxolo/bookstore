@extends('layout/template')

@section('content')
    <h2>Create Book</h2>

    @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

    @if(Session::has('flash_message'))
      <div class="alert alert-success">
        {{ Session::get('flash_message') }}
      </div>
    @endif

    {!! Form::open(['url' => 'books']) !!}
    <div class="form-group">
        {!! Form::label('ISBN', 'ISBN:') !!}
        {!! Form::text('isbn',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Author', 'Author:') !!}
        {!! Form::text('author',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publisher', 'Publisher:') !!}
        {!! Form::text('publisher',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}

        <a href="{{ url('books')}}" class="btn btn-primary">Back</a>
    </div>
    
    {!! Form::close() !!}
@stop