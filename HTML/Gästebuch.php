<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/main.css">


  <title>Gästebuch</title>
</head>

<body>
  <?php include './header.php';  ?>
  <main class="inhalte Rahmen">
    <fieldset class="field">
      <legend><b>Gästebuch</b></legend>
      <form action="#" method="POST">
        <!-- ../Gaestebuch/SkriptGaestebuch.php -->

        <b>Name: </b><br><input name="input_name" type="text"><br><br>

        <!-- Emailadresse: <br><input name="input_email" type="email"><br><br> -->

        <b>Betreff:</b><br> <input name="input_betreff" type="text"><br><br>

        <b>Nachricht:</b><br> <textarea name="input_nachricht" type="text" cols="50" rows="10"></textarea><br><br>

        <input name="Abschicken" type="submit" value="Submit">




    </fieldset>
    </form>
    <?php

    include '../php/SkriptGaestebuch.php';
    /* if (isset($_POST['input_name']) || isset($_POST['input_betreff']) || isset($_POST['input_nachricht'])) {


    $myfile =  fopen("comments.html", "r") or die("Fehler beim Öffnen");
    $writeName = "Name:" . $_POST['input_name'] . "<br/>";
    $writeBetreff = "Betreff:" . $_POST['input_betreff'] . "<br/>";
    $writeNachricht = "Nachricht:" . $_POST['input_nachricht'] . "<br/> <hr>";


    fwrite($myfile, $writeName);
    fwrite($myfile, $writeBetreff);
    fwrite($myfile, $writeNachricht);
    fclose($myfile);




    include("comments.html");
    print "Vielen Dank für Ihr Feedback.<br> <hr>";
  } else {
    include("comments.html");
  } */



    ?>



  </main>
  <?php

  include './footer.php';

  ?>
</body>

</html>