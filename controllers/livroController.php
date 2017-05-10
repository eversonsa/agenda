<?php
/**
 * Description of livroController
 *
 * @author everson.araujo
 */
class livroController extends controller {
    public function index() {
        $dados = array();
        
       $this->loadTemplate('livro', $dados);
    }
}
