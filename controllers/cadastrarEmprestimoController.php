<?php
/**
 * Description of cadastrarEmprestimoController
 *
 * @author everson.araujo
 */
class cadastrarEmprestimoController extends controller{
    
    public function index() {
        $dados = array();
        
        $this->loadTemplate('cadastrarEmprestimo', $dados);
    }
    
}
