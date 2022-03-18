<?php

class Sql extends PDO{

    private $conn;

    public function __construct(){
        
        $this->conn = 
        new PDO("mysql:host=localhost;dbname=dbphp7", "root", "imply123");
    }

    //Para criar um código mais inteligente,
    //Foi organizado cada parte da conexão com o BD
    //em funções separadas
    
    //Cria um parametro
    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    }
    //
    private function setParams($statement, $parameters = array()){
        
        foreach ($parameters as $key => $value) {

            $this->setParam($statement, $key, $value);

        }
    }
    //Cria uma query(solicitação ou linha de comando para o BD)
    public function newquery($rawQuery, $params = array()){

        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }    

    public function select($rawQuery, $params = array()):array{

        $stmt = $this->newquery($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }


    public function getConn()
    {
        return $this->conn;
    }
    public function setConn($conn)
    {
        $this->conn = $conn;

        return $this;
    }
}

?>