@extends('app')

@section('content')

<h1>Create</h1>


{!! Form::open(['url' => 'articles']) !!} 

@include('articles.form', ['submitButtonText' => 'Add Article'])

{!! Form::close() !!} 

@include('errors.list')
 

    
@stop