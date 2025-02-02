<?php
class User{
    public $username;
    public $userAdress;
    public $mobileNumber;
    public $email;
    public $computerName;
    public $idProof;


    public function addUser()
    {
        //Adiciona um computador a base de dados
        global $database;

        $sql = "INSERT INTO users (username,userAdress,mobileNumber,email,computerName,idProof)
         VALUES ('$this->username','$this->userAdress','$this->mobileNumber','$this->email','$this->computerName','$this->idProof')";

        $database->query($sql);
    }


    public static function getAllUsers()
    {
        global $database;

        $sql = "SELECT * FROM users";
        $results = $database->query($sql);
        $resultsArray = array();

        while ($row = mysqli_fetch_array($results)) {
            $resultsArray[] = $row;
        }


        return $resultsArray;
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
?>