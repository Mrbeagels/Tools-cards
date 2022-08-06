<?php
    $retour = mail('thibaud.marin1@gmail.com', 'Envoi depuis la page index.html', $_POST['user_message'], 'From: webmaster@monsite.fr');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>