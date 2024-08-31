<div>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ old('nome', $produto->nome ?? '') }}">
</div>

<div>
    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade" value="{{ old('quantidade', $produto->quantidade ?? '') }}">
</div>
