<?php
class EvolvedPerson {
    private $mysqlConnection ;
    public $fields = array();


    public function __construct($id){

      $this->mysqlConnection= DBConn::getConnection();
    }
    public function __get($name)
    {
        return $this->fields[$name];
    }
    public function __set($name, $value)
    {

        $this->fields[$name] = $value;
    }

//    public function commitToDB(){
//
//        $sqlInsertQuery = "INSERT INTO person (id, first, last,email, phone) VALUES ('{$this->id}', '{$this->first}', '{$this->last}' , '{$this->email}', '{$this->phone}')";
////      $sqlInsertQuery =  "INSERT INTO person (id, first, last,email, phone) VALUES ('20' ,'bam', 'dad' , 'bamdad.ag' , '555' )";
//        if (!$result = $this->mysqlConnection->query($sqlInsertQuery)) {
//            die ('There was an error running query[' . $this->mysqlConnection->error .']');
//        }
//
//    }
//    public function pullFromDB(){
//        $sqlLoadQuery = "SELECT * FROM person WHERE id={$this->id}";
//        $result = $this->mysqlConnection->query($sqlLoadQuery);
//        $row = $result->fetch_assoc();
//        $this->first = $row['first'];
//        $this->last = $row['last'];
//        $this->phone = $row['phone'];
//        $this->email = $row['email'];
//
//    }
    public function __toString() {
        return "Name: {$this->first},{$this->last}\n" ;
    }

}

?>