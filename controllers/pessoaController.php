<?php


class pessoaController extends controller{
    public function index() {
        $dados = array();
        $p = new Pessoa();
        $p->inserirPessoa();
        $this->loadTemplate('pessoa', $dados);
    }
}
