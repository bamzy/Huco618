<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 8:09 PM
 */
class SqlFactory
{
    private $tableName;
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
    public function __construct($name){
        $this->tableName = $name;

    }
    private function getDescription(){
        $this->fields = array();
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
    public function getInsertQuery($input){
        if (!$this->getDescription()) {
            echo "Could not fetch description from database \n";
            return false;
        }
        if (sizeof($input) != sizeof($this->fields)){
            echo "Wrong Input, number of your fields should match the number in database \n";
            return false;
        }
        $res = "INSERT INTO " . $this->tableName . " (";
        $values = "";
        for ($i=0;$i<sizeof($this->fields);$i++){
            if ($i == sizeof($this->fields)-1){
                $res = $res . $this->fields[$i]['Field'] ;
                $values = $values . "'" .$input[$this->fields[$i]['Field']]. "'" ;
            }else {
                $res = $res . $this->fields[$i]['Field'] . ",";
                $values = $values . "'" .$input[$this->fields[$i]['Field']] . "'" . ",";
            }
        }
        $res = $res . ") VALUES(". $values . ")";
        return $res;
    }
    public function getUpdateQuery($input){
        if (!$this->getDescription()) {
            echo "Could not fetch description from database \n";
            return false;
        }
        if (sizeof($input) != sizeof($this->fields)){
            echo "Wrong Input, number of your fields should match the number in database \n";
            return false;
        }
        $res = "UPDATE " . $this->tableName . " SET ";
        $values = "";
        for ($i=0;$i<sizeof($this->fields);$i++){
            if ($i == sizeof($this->fields)-1){
                $res = $res . $this->fields[$i]['Field'] ."=" ."'".$input[$this->fields[$i]['Field']]."'" ;
            }else {
                $res = $res . $this->fields[$i]['Field'] ."=" ."'".$input[$this->fields[$i]['Field']]."'" . ",";
            }
        }

        return $res;
    }

}