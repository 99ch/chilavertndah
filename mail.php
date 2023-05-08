 <?php
  if (isset($_POST["message"])) {
    $message = "Ce message vous a été Envoyé via votre portfolio"
    Nom: ". $_POST["name"] ."
    Email: ". $_POST["email_address"] ."
    Message: ". $_POST["message"] ;

    $retour = mail("Chilavertndah99@gmail.com", $_POST["phone"], $message, "" . "\r\n" . "Reply-to:" . $_POST["email_address"] );
    if ($retour) {
      echo " <p>Votre message a bien été envoyé.</p> "
    }

  }
  ?>
