<div class="mb-4">
    <label for="nome" class="block text-gray-700">Nome:</label>
    <input type="text" id="nome" name="nome" class="mt-1 block w-full border border-gray-300 rounded-md" value="{{ old('nome', $produto->nome ?? '') }}">
</div>

<div class="mb-4">
    <label for="quantidade" class="block text-gray-700">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade" class="mt-1 block w-full border border-gray-300 rounded-md" value="{{ old('quantidade', $produto->quantidade ?? '') }}">
</div>
