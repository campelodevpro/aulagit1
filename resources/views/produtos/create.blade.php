@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Criar Produto</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-2 mb-4">
            <strong>Erros!</strong>
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @include('produtos._form')
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Salvar</button>
    </form>
@endsection
