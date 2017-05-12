<?php

/**
 * Description of Livro
 *
 * @author everson.araujo
 */
class Livro extends model{
    
    public function inserirLivros() {
        if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])){
            $permitidos = array('image/jpeg', 'image/png', 'image/jpg');
            
            if(in_array($_FILES['arquivo']['type'], $permitidos)){
                
                $nome = md5(time().rand(0, 999)).'.jpg';
                move_uploaded_file($_FILES['arquivo']['tmp_name'] , 'assets/imagens/'.$nome);
                
                $nome_livro = "";
                if(isset($_POST['nome_livro']) && !empty($_POST['nome_livro'])){
                    $nome_livro = addslashes($_POST['nome_livro']);
                    $categoria_id = addslashes($_POST['categoria_id']);
                }
                
                $sql = "INSERT INTO livro SET nome_livro = '$nome_livro', foto_livro = '$nome', categoria_id = '$categoria_id'";
                $sql = $this->db->query($sql);
            }
        }
    }
    
     public function listaCategoriaDeLivro(){
            $categorias = array();
            $sql = "SELECT * FROM categoria";
            $sql = $this->db->query($sql);
                if($sql->rowCount() > 0){
                    $categorias = $sql->fetchAll();
                }
                return $categorias;
   }
}
