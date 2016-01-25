<?php
     require_once('person.php');

        $bamdad = new person(99);
//      $bamdad->pullFromDB();
//      var_dump($bamdad);
//      echo "this is your results:   " . $bamdad. "\n";
        $bamdad->setFirstName('bamdad');
        $bamdad->setLastName('ag');
        $bamdad->setEmail('bamdad.ag');
        $bamdad->setPhone('3345432');
        $bamdad->commitToDB();
        var_dump($bamdad);

?>
