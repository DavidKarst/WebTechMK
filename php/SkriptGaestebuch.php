<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 

 
    
    if (isset($_POST['input_name']) || isset($_POST['input_betreff']) || isset($_POST['input_nachricht'])) {

        $filename = "comments.html";
        $file = fopen($filename, "a") or die("Fehler beim Öffnen");

        if (filesize($filename) > 0)
            $file_contents = fread($file, filesize($filename));
        fclose($file);

        $writeName = $_POST['input_name'] . "<br/>";
        $writeBetreff =  $_POST['input_betreff'] . "<br/>";
        $writeNachricht = $_POST['input_nachricht'] . "<br/> <hr>";



        $file_contents = file_get_contents($filename);
  
        $timestamp = time();
        $todayDate = date("j.n.Y", $timestamp);
        $todayTime = date("G:i:s", $timestamp);
        $file = fopen($filename, "w") or die("Fehler beim Schreiben");

        fwrite($file, "\n<table width=\"600\"> <tr> <th>");
        fwrite($file, "Am $todayDate um $todayTime Uhr schickte $writeName diese Nachricht");
        fwrite($file, "</th></tr>");
        fwrite($file, "<tr><td>");
        fwrite($file, "<b>Betreff:</b> <br> $writeBetreff <br>");
        fwrite($file, "<b>Nachricht:</b> <br> $writeNachricht <br>");
        fwrite($file, "");/* </td> </tr> */
        /* if ($writeNachricht != "") {
            fwrite($file, "<tr><td>");
            fwrite($file, "Es fehlt die Nachricht");
            fwrite($file, "</td> </tr>");
        } */
        fwrite($file, "</table> <br>");

        //alte Tipps zurückschreiben
        fwrite($file, $file_contents);
        fclose($file);
        print "<p>Vielen Dank für Ihr Feedback.<br>
Er wurde zum Gästebuch hinzugef&uuml;gt.<br></p>";
        
        //Anzeigen der Tipps
            include ("comments.html");
    


    }else {
        include("comments.html");
      } 

    ?>


</body>

</html>