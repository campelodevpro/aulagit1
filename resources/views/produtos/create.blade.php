@extends('layout')

@section('content')
    <h1>Criar Produto</h1>

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

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        @include('produtos._form')
        <button type="submit">Salvar</button>
    </form>
@endsection
