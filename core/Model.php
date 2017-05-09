<?php
class model {
	
 protected $db;

   public function __construct() {
       try{
       global $config;
         $this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
         $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  

         }  catch (PDOException $e){
             echo 'erro ao conectar na base' . $e->getMessage();
             die();
         }
   }
}
?>