@extends('layout')

@section('content')
    <h1>Detalhes do Produto</h1>

    <p>Nome: {{ $produto->nome }}</p>
    <p>Quantidade: {{ $produto->quantidade }}</p>

    <a href="{{ route('produtos.index') }}">Voltar</a>
@endsection
