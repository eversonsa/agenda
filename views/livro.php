<fieldset>
    <legend class="espacamento">Adicionar Livro</legend>
    <form enctype="multipart/form-data" method="POST" class="">
    <label>Nome do Livro:</label><br>
    <input type="text" name="nome_livro" class="form-control"/><br>
    Foto do Livro:</br>
    <input type="file" name="arquivo" class="form-control" ><br>
    <label>Categoria dos Livros</label><br>
        <select name="categoria_id"">
            <?php foreach($livros as $livro) : ?>
            <option value="<?=$livro['id']?>"><?=$livro['nome'];?></option>
            <?php endforeach ?>
        </select>
    <br>
        <input type="submit" value="Enviar Arquivo" class="btn btn-default"/>
</form>
</fieldset><br><br>
