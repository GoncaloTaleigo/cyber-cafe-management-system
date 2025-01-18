
<?php
/*Classe que cria o objeto relativamente á base de dados. Cria conexão e executa queries */
class Database{
    public $connection;

    function __construct()
    {
         $this->connection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
         if($this->connection->connect_errno){
            echo "this connection failed";
         }
        
    }

    function query($sql){
      return $this->connection->query($sql);

    }


}




$database=new Database();
?>
