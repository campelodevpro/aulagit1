@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Detalhes do Produto</h1>

    <p><strong>Nome:</strong> {{ $produto->nome }}</p>
    <p><strong>Quantidade:</strong> {{ $produto->quantidade }}</p>

    <a href="{{ route('produtos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 mt-4 inline-block">Voltar</a>
@endsection
