@extends('layouts.app')



@section('content')
{!! Form::open(['action' => 'TodosController@store','method'=>'POST']) !!}
{{ Form::bsText('text') }}
{{ Form::bsTextArea('body') }}
{{ Form::bsText('due') }}
{{ Form::bsSubmit('submit',['class'=>'btn btn-primary']) }}
{!! Form::close() !!}

<h1> create Todo</h1>
@endsection