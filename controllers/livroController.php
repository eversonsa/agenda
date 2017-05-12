<?php
/**
 * Description of livroController
 *
 * @author everson.araujo
 */
class livroController extends controller {
    public function index() {
        $dados = array();
        
        $livros = new Livro();
        $livros->inserirLivros();
        
        $dados['livros'] = $livros->listaCategoriaDeLivro();
        
       $this->loadTemplate('livro', $dados);
    }
}
 