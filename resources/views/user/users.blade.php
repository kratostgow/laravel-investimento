@extends('templates.master')

@section('css-view')

@endsection

@section('conteudo-view')
    
    {!! Form::open(['method' => 'post', class=> 'form-padrao']) !!}
    {!! Form::close() !!}

@endsection

@section('js-view')

@endsection

