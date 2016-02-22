<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/1/2016
 * Time: 4:43 PM
 */
class CustomObject
{

    private $mysqlConnection ;

    public $fields = array();
    protected $tableName= 'person';

    public function     __construct($id = -1){

        $this->mysqlConnection= DBConn::getConnection();
        $this->initializeFieldsFromDB();
        $this->id = $id;
//        $this->tableName = $tableName;
    }
    public function __get($name)
    {
        if (array_key_exists ( $name,$this->fields ) )
            return $this->fields[$name];
        else
            return null;
    }
    public function __set($name, $value)
    {
        if ( array_key_exists ( $name,$this->fields ) )
            $this->fields[$name] = $value;
    }
    protected function initializeFieldsFromDB()
    {

        $query = "DESCRIBE {$this->tableName}";
        $result = $this->mysqlConnection->query($query);

        while ( $row = $result->fetch_assoc() ){
            //$row['Field']
            $this->fields[$row['Field']] = null;
        }
//        print_r($this->fields);
    }
    public function loadDataFromDB(){
//        echo $this->id;
//        echo "Loading From Database\n";
        if ($this->id == -1 || $this->id == null){
            return null;
        }
        $query = "SELECT * FROM {$this->tableName} WHERE id = {$this->id}";
        $result = $this->mysqlConnection->query($query);
//        var_dump($result);
        $row = $result->fetch_assoc();
        foreach ($row as $drawer => $value){
            $this->fields[$drawer] = $value;
//            echo "I am looking at a field called {$drawer} with value: {$value} \n";
        }
    }
    protected function getMax($fieldName){
        $query = "SELECT MAX({$fieldName}) FROM {$this->tableName}";
        $result = $this->mysqlConnection->query($query);
        return $result->fetch_assoc();

    }
    public function createFieldList()
    {
        $resultString = "(";
        foreach ($this->fields as $key => $value) {
            $resultString = $resultString . $this->mysqlConnection->escape_string($key) . ", ";
        }
        $resultString[strlen($resultString)-2] = ')';
        return $resultString;

    }

    public function createInsertValueList()
    {
        $resultString = "(";
        foreach ($this->fields as $key => $value) {
            if ($key =='id' and $value=='-1')
                $value = $this->getMax('id');
            $resultString = $resultString . "'". $this->mysqlConnection->escape_string($value). "'" . ", ";
        }
        $resultString[strlen($resultString)-2] = ')';

        return $resultString;

    }
    public function createUpdateValueList()
    {
        $resultString = "";
        foreach ($this->fields as $key => $value) {
            if ($key =='id' and $value=='-1')
                continue;
            $resultString = $resultString . "$key" . "='". $this->mysqlConnection->escape_string($value). "'" . ", ";
        }
        $resultString[strlen($resultString)-2] = ' ';

        return $resultString;

    }

    public function saveDataToDB()
    {
        if ($this->id == -1) {
            $query = "INSERT INTO {$this->tableName} "." {$this->createFieldList()} VALUES {$this->createInsertValueList()}";
        } else if ( $this->id >0 ){
            $query = "UPDATE {$this->tableName}". " SET " . "{$this->createUpdateValueList()}" ." WHERE id={$this->id}";

        }
        //echo $query;
        $this->mysqlConnection->query($query);
        if ($this->mysqlConnection->affected_rows == 1)
            return true;

        else {
            echo $this->mysqlConnection->error . "\n";
            return false;
        }

    }
    public function loadFromHtmlForm(){
        foreach ($_POST as $key => $value) $this->$key=$value;
    }


}
?>