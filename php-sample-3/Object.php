<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/1/2016
 * Time: 4:43 PM
 */
class Object
{

    private $mysqlConnection ;
    public $fields = array();

    public function     __construct($id){

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
        print_r($this->fields);
    }
    public function loadDataFromDB(){
        echo $this->id;
        echo 'hi\n';
        $query = "SELECT * FROM {$this->tableName} WHERE id = {$this->id}";
        $result = $this->mysqlConnection->query($query);
        var_dump($result);
        $row = $result->fetch_assoc();
        foreach ($row as $drawer => $value){
            $this->fields[$drawer] = $value;
            echo "I am looking at a field called {$drawer} with value: {$value} \n";
        }
    }


}
?>