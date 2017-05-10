<?php


class pessoaController extends controller{
    public function index() {
        $dados = array();
        
        
        $this->loadTemplate('pessoa', $dados);
    }
}
