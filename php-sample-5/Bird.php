<?php
require_once('CustomObject.php');

class Bird extends CustomObject
{

    protected $tableName = "bird";
    public function __construct($id = parent::DEFAULT_ID_NUMBER)
    {
        parent::__construct($id);
    }



    public function displayAsHTML()
    {
        echo "<form method=\"post\" action=\"\">
        <p>Common: <input type=\"text\" name=\"common\" id=\"common\" value=\"{$this->common}\"> </p>
        <p>Scientific: <input type=\"text\" name=\"Scientific\" id=\"Scientific\" value=\"{$this->scientific}\"> </p>
        <input type=\"hidden\" id=\"id\" name=\"id\" value=\"{$this->id}\">
        <p> <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Save to DB\" </p>
        </form>";
    }


}

?>