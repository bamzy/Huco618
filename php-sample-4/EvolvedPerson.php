<?php
require_once('CustomObject.php');

class EvolvedPerson extends CustomObject
{
    public function __construct($id = -1)
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
        <p> <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Save to DB\" </p>
        </form>";
    }


}

?>