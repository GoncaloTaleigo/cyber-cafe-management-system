<?php

class Computer
{
    public $name;
    public $location;
    public $ip;


    public function addComputer()
    {
        //Adiciona um computador a base de dados
        global $database;

        $sql = "INSERT INTO computers (name,location,ip_adress) VALUES ('$this->name','$this->location','$this->ip')";

        $database->query($sql);
    }

    public static function getAllComputers()
    {
        global $database;

        $sql = "SELECT * FROM computers";
        $results = $database->query($sql);
        $resultsArray = array();

        while ($row = mysqli_fetch_array($results)) {
            $resultsArray[] = $row;
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
            $resultsArray[] = $row;
        }


        return $resultsArray[0];
    }

    public static function updateComputerValues($id,$name,$location,$ip)
    {
        global $database;

        $sql = "UPDATE computers SET name = '$name', location = '$location', ip_adress='$ip'  WHERE id=$id;";

        $result = $database->query($sql);


        return $result;
    }
}
