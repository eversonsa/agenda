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
        $endereco = addslashes($_POST['endereco']);
        $data_cadastro = addslashes($_POST['data_endereco']);
        $ativo = addslashes($_POST['ativo']); 
        
        $sql = $this->db->prepare("INSERT INTO pessoa SET nome = :nome, endereco = :endereco, data_cadastro = :data_cadastro, ativo = :ativo");
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":endereco", $endereco);
        $sql->bindParam(":data_cadastro", $data_cadastro);
        $sql->bindParam(":ativo", $ativo);
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
