@extends('templates.master')

@section('css-view')

@endsection

@section('conteudo-view')

    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @else
        wtfdsfsf
    @endif

    {!! Form::open(['route' => 'user.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
        @method('POST')
        @include('templates.formulario.input', ['input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
        @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
        @include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder' => 'Telefone']])
        @include('templates.formulario.input', ['input' => 'email', 'attributes' => ['placeholder' => 'E-mail']])
        @include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder' => 'Senha']])
        @include('templates.formulario.submit', ['input' => 'Cadastrar', 'attributes' => ['class' => 'submit']])
    {!! Form::close() !!}

@endsection

@section('js-view')

@endsection

