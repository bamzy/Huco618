<?php
class person {
   protected $id;
   protected $first;
   protected $last;
   protected $email;
   protected $phone;
   protected $mysql;
   private $host = 'localhost';
   private $user = 'aghilide';
   private $password = 'patting6solecisms&growths,';
   private $databaseName = 'aghilidedb';
   private $mysqlConnection ;


   public function getID(){
        return $this->id;
   }
   public function setID($id){
        $this->id=$id;
   }

   public function getFirstName(){
        return $this->first;
   }
   public function setFirstName($first){
        $this->first=$first;
   }

  public function getLastName(){
        return $this->last;
   }
  public function setLastName($last){
        $this->last=$last;
   }

  public function getEmail(){
        return $this->email;
   }
  public function setEmail($email){
        $this->email = $email;
   }

  public function getPhone(){
        return $this->phone;
   }

  public function setPhone($phone){
       $this->phone = $phone;
   }
   
  public function __construct($id){

//    $host = 'localhost';
//    $user = 'aghilide';
//    $password = 'patting6solecisms&growths,';
//    $databaseName = 'aghilidedb';
    $this->mysqlConnection = new MySQLi($this->host,$this->user,$this->password, $this->databaseName);
    if ($this->mysqlConnection) echo "the object is not null\n";

    $this->id = $id;

    $sql = "SELECT * FROM bird WHERE id={$id}";
    if (!$result = $this->mysqlConnection->query($sql)) {
        die ('There was an error running query[' . $this->mysqlConnection->error .']');
    }

   }
   public function commitToDB(){

      $sqlInsertQuery = "INSERT INTO person (id, first, last,email, phone) VALUES ('{$this->id}', '{$this->first}', '{$this->last}' , '{$this->email}', '{$this->phone}')";
//      $sqlInsertQuery =  "INSERT INTO person (id, first, last,email, phone) VALUES ('20' ,'bam', 'dad' , 'bamdad.ag' , '555' )";
             if (!$result = $this->mysqlConnection->query($sqlInsertQuery)) {
          die ('There was an error running query[' . $this->mysqlConnection->error .']');
      }

   }
   public function pullFromDB(){
        $sqlLoadQuery = "SELECT * FROM person WHERE id={$this->id}";
        $result = $this->mysqlConnection->query($sqlLoadQuery);
        $row = $result->fetch_assoc();
        $this->first = $row['first'];
        $this->last = $row['last'];
        $this->phone = $row['phone'];
        $this->email = $row['email'];

   }
   public function __toString() {
        return "Name: {$this->first},{$this->last}\n" ;
   }

}

?>