@extends('layout')

@section('content')
    <h1>Lista de Produtos</h1>

    <a href="{{ route('produtos.create') }}">Criar Produto</a>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <table>
        <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>
                <a href="{{ route('produtos.show', $produto->id) }}">Ver</a>
                <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
