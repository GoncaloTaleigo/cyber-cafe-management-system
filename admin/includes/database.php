
<?php
/*Classe que cria o objeto relativamente á base de dados. Cria conexão e executa queries */
class Database{
    public $connection;

    function __construct()
    {
         $this->connection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
         if($this->connection->connect_errno){
            echo "this connection failed";
         }else{
            echo "we are connected";
         }
        
    }

    function query($sql){
        $queryResult=$this->connection->query($sql);

        return $queryResult;

    }
}




$database=new Database();
?>
