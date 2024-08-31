@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Lista de Produtos</h1>

    <a href="{{ route('produtos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Criar Produto</a>

    @if ($message = Session::get('success'))
        <div class="bg-green-500 text-white p-2 mt-4">
            {{ $message }}
        </div>
    @endif

    <table class="min-w-full bg-white mt-4">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nome</th>
                <th class="py-2 px-4 border-b">Quantidade</th>
                <th class="py-2 px-4 border-b">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td class="py-2 px-4 border-b">{{ $produto->nome }}</td>
                <td class="py-2 px-4 border-b">{{ $produto->quantidade }}</td>
                <td class="py-2 px-4 border-b flex space-x-2">
                    <a href="{{ route('produtos.show', $produto->id) }}" class="text-blue-500 hover:underline">Ver</a>
                    <a href="{{ route('produtos.edit', $produto->id) }}" class="text-yellow-500 hover:underline">Editar</a>
                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
