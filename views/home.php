<form method="POST">
    nome:
    <input type="text" name="nome" /><br>
    dia do emprestimo do livro:
    <input type="datetime-local" name="dia" /><br>
    devolucao:
    <input type="datetime-local" name="retorno" /><br>
    entregue:
    <input type="checkbox" name="entregue" value="TRUE"/><br>
    
        <input type="submit" value="Cadastrar" />
    
</form>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Dia Emprestimo do livro</th>
        <th>Devolucao</th>
        <th>Foi entregue</th>
    </tr>
    <tr>
        <?php foreach ($pessoa as $p) : 
            $teste = $p['entregue'] == TRUE ? "SIM" : "NAO";
            ?>
        <td><?=$p['nome']?></td>
        <td><?=$p['dia']?></td>
        <td><?=$p['retorno']?></td>
        <td><?=$teste?></td>
    </tr>
 <?php endforeach;?>
</table>