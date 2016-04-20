<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 6:02 PM
 */
class SqlDataCleaner
{
    private $conn;
    private $fields = array();
    private function initConnection(){
        if ($this->conn == null) {
            $this->conn = new mysqli('localhost', 'root', 'salam', 'exercise');
            if ($this->conn->connect_errno > 0) {
                die('Unable to connect to database [' . self::$conn->connect_error . ']');
                return false;
            }
        }
        return true;

    }
    private $tableName;
    public function __construct($name){
        $this->tableName = $name;

    }
    private function getDescription(){
        if (!$this->initConnection())
            return false;
        $query = "Describe {$this->tableName}";
        if (!$res = $this->conn->query($query)) {
            die('There was an error running the query [' . $query->error . ']');
        }

        while ($row = $res->fetch_assoc()) {
            array_push($this->fields, $row);
        }
        return true;

    }
    public function makeClean($input){
        if (!$this->getDescription()) {
            echo "Could not fetch description from database \n";
            return false;
        }
//        echo sizeof($input) ."   ". sizeof($this->fields);
        if (sizeof($input) != sizeof($this->fields)){
            echo "Wrong Input, number of your fields should match the database \n";
            return false;
        }
        for ($i=0;$i<sizeof($this->fields);$i++){
//            echo "INPUT=>" . $input[$i] . "  field==>". $this->fields[$i]['Type'] ."\n";
            if (preg_match('/int/',$this->fields[$i]['Type'])|| preg_match('/bool/',$this->fields[$i]['Type'])){

                if (!is_int($input[$i])){
                    echo "field number " .$i. " with value: ". $input[$i] . " is not an Integer \n";
                    return null;
                }


            } if (preg_match('/double/',$this->fields[$i]['Type'] ) ) {
                if (!is_double($input[$i])){
                    echo "field number " .$i. " with value: ". $input[$i] . " is not a Double \n";
                    return null;
                }

            } else if (preg_match('/char/',$this->fields[$i]['Type']) || preg_match('/text/',$this->fields[$i]['Type'])){
                    $input[$i] = $this->conn->real_escape_string($input[$i]);


            } else if (preg_match('/enum/',$this->fields[$i]['Type']) ){
                if (!preg_match('/(\''.$input[$i].'\')/', $this->fields[$i]['Type'])){
                    echo "field number " .$i. " with value: ". $input[$i] . " does not have a value mentioned in enum \n";
                    return null;
                }
            }


        }
        return $input;


    }

}

?>