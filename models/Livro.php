<?php

/**
 * Description of Livro
 *
 * @author everson.araujo
 */
class Livro {
     public function getLivro(){
        $array = array();
        
        $sql = "SELECT * FROM livro";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
    public function salvarFotos() {
        if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])){
            $permitidos = array('image/jpeg', 'image/png', 'image/jpg');
            
            if(in_array($_FILES['arquivo']['type'], $permitidos)){
                
                $nome = md5(time().rand(0, 999)).'.jpg';
                move_uploaded_file($_FILES['arquivo']['tmp_name'] , 'assets/images/'.$nome);
                
                $titulo = "";
                if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
                    $titulo = addslashes($_POST['titulo']);
                }
                
                $sql = "INSERT INTO fotos SET titulo = '$titulo', url = '$nome'";
                $sql = $this->db->query($sql);
            }
        }
    }
}
