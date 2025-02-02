<?php

class Computer
{
    public $name;
    public $location;
    public $ipAdress;


    public function addComputer()
    {
        //Adiciona um computador a base de dados
        global $database;

        $sql = "INSERT INTO computers (name,location,ip_adress) VALUES ('$this->name','$this->location','$this->ipAdress')";

        $database->query($sql);
    }

    public static function getAllComputers()
    {
        global $database;

        $sql = "SELECT * FROM computers";
        $results = $database->query($sql);
        $resultsArray = array();

        while ($row = mysqli_fetch_array($results)) {
            $resultsArray[] =self::setProperties($row);
        }

      return $resultsArray;
  
    }


    public static function getComputerById($id)
    {
        global $database;

        $sql = "SELECT * FROM computers WHERE id=$id";

        $result = $database->query($sql);
        $resultsArray = array();


        while ($row = mysqli_fetch_assoc($result)) {
            $resultsArray[] = self::setProperties($row);
        }


        return $resultsArray;
    }

    public static function updateComputerValues($id, $name, $location, $ipAdress)
    {
        global $database;

        $sql = "UPDATE computers SET name = '$name', location = '$location', ipAdress='$ipAdress'  WHERE id=$id;";

        $result = $database->query($sql);


        return $result;
    }

    public static function setProperties($result)
    {

        $object = new Computer;
        $propertiesObject = get_object_vars($object);
     

        foreach ($result as $key => $value) {

            if (array_key_exists($key, $propertiesObject)) {

                $object->$key = $value;
            }


 
        }

        return $object;
    }
}
