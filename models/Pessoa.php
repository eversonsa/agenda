<?php
/**
 * Description of Pessoa
 *
 * @author everson
 */
class Pessoa extends model{
   
    public function inserirPessoa() {     
        $nome = '';
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $dia = addslashes($_POST['dia']);
        $retorno = addslashes($_POST['retorno']);
        $entregue = addslashes($_POST['entregue']); 
        
        $sql = $this->db->prepare("INSERT INTO pessoa SET nome = :nome, dia = :dia, retorno = :retorno, entregue = :entregue");
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":dia", $dia);
        $sql->bindParam(":retorno", $retorno);
        $sql->bindParam(":entregue", $entregue);
        $sql->execute();
        }
    }
    
    public function mostrarDados() {
        $array = array();
        $sql = "SELECT * FROM pessoa";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}
