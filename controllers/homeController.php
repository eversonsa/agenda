<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        
       $pessoa = new Pessoa();
       $pessoa->inserirPessoa();
       
       $dados['pessoa'] = $pessoa->mostrarDados();

        $this->loadTemplate('home', $dados);
    }

}