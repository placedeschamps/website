
    <?php
    $retour = mail('juliette30.d@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@monsite.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
