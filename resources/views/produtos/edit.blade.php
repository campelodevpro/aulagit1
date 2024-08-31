@extends('layout')

@section('content')
    <h1>Editar Produto</h1>

    @if ($errors->any())
        <div>
            <strong>Erros!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('produtos._form')
        <button type="submit">Atualizar</button>
    </form>
@endsection
