<?php
require_once('CustomObject.php');

class EvolvedPerson extends CustomObject
{

    protected $tableName = "person";
    public function __construct($id = parent::DEFAULT_ID_NUMBER)
    {
        parent::__construct($id);

    }

    public function displayAsHTML()
    {
        echo "<form method=\"post\" action=\"\">
        <p>First Name: <input type=\"text\" name=\"first\" id=\"first\" value=\"{$this->first}\"> </p>
        <p>Last Name: <input type=\"text\" name=\"last\" id=\"last\" value=\"{$this->last}\"> </p>
        <p>Phone: <input type=\"text\" name=\"phone\" id=\"phone\" value=\"{$this->phone}\"> </p>
        <p>Email: <input type=\"text\" name=\"email\" id=\"email\" value=\"{$this->email}\"> </p>
        <input type=\"hidden\" id=\"id\" name=\"id\" value=\"{$this->id}\">
        <p> <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Save to DB\" </p>
        </form>";
    }


}

?>