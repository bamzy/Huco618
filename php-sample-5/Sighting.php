<?php
require_once('CustomObject.php');

class Sighting extends CustomObject
{

    protected $tableName = "sighting";
    public function __construct($id = parent::DEFAULT_ID_NUMBER)
    {
        parent::__construct($id);
    }

    public function loadDataFromDB()
    {
        parent::loadDataFromDB();
        $observer = new EvolvedPerson($this->fields['person_id']);
        $observer->loadDataFromDB();
        $this->fields['observerName'] = $observer->first;
        $bird = new Bird($this->fields['bird_id']);
        $bird->loadDataFromDB();
        $this->fields['birdCommon'] = $bird->common;


    }

    public function displayAsHTML()
    {
        echo "<form method=\"post\" action=\"\">
        <p>Person Name: <input type=\"text\" name=\"personId\" id=\"personId\" value=\"{$this->observerName}\"> </p>
        <p>Bird Common: <input type=\"text\" name=\"birdCommon\" id=\"birdCommon\" value=\"{$this->birdCommon}\"> </p>
        <input type=\"hidden\" id=\"id\" name=\"id\" value=\"{$this->id}\">
        <p> <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Save to DB\" </p>
        </form>";
    }


}

?>