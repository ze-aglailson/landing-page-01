<?php

class Conexao extends PDO{
    private $con;

    public function __construct(){
        $db_host = '127.0.0.1';
        $db_driver = 'mysql';
        $db_name = 'landingp01';
        $db_user = 'root';
        $db_password = '2909';

        try{
            $this->con =  new PDO("$db_driver:host=$db_host;dbname=$db_name;charset=utf8",$db_user,$db_password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die("Connection Error: " .$e->getMessage());
        }
    }
    //Faz o bind de um parametro
    public function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    //Faz o bind de todos os parametros
    public function setParams($statement, $parameters=array()){

        foreach ($parameters as $key => $value) {
            
            $this->setParam($statement, $key, $value);

        }

    }

    //Query padrão
    public function query($rawQuery, $params = array()){
        $stmt = $this->con->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    //Select
    public function select($rawQuery, $params=array()){

        $stmt = $this->query($rawQuery,$params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      

    }
}

?>