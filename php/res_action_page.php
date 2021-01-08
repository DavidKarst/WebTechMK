<?php

    //MailToDisk aktivieren -> in php.ini Datei -> sendmail-Path setzen 

    //Daten aus dem Formular auslesen und in Variablen speichern
    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $persons = $_POST["number"];
    $kids = $_POST["baby"];

    $message = "Reservierungsanfrage von " .$name . " für den " .$date . ". Uhrzeit: " .$time . " Uhr.  Für " .$persons . " Personen und " .$kids . " Kleinkind(er)";
    $listener = "uderf@hochschule-trier.de";
    $topic = "Reservierung";
    $txt = "Von:" .$mailFrom;
    $info = "Sie habe eine Email von ".$name . " erhalten.";

    //Email versenden
    mail($listener, $topic, $message, $txt);

    //Auf HTML website bleiben
    header("Location: ../HTML/reservierungen.php");
    
    


?>



