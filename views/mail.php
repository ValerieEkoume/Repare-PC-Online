<?php

use App\Connection;
$pdo = (new Connection())->getPdo();

//require_once '../agence/Model/liste.php';

//$sql = $pdo->prepare('SELECT nom_centre, adresse, tel, latitude, longitude, created, ouverture, fermeture FROM centres');
//$sql->execute();
//$villes = $sql->fetchAll();



if (isset($_GET['name'])) {

    //$centre = strip_tags(htmlspecialchars($_POST['centre']));
    $nom = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $adresse = strip_tags(htmlspecialchars($_POST['adresse']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    $tel = strip_tags(htmlspecialchars($_POST['tel']));


    $req = $pdo->prepare("INSERT INTO client (email, name, adresse, tel, commentaire) VALUES ('$email', '$nom', '$adresse', '$tel', '$message')");
    $req->execute();

    if ($req) {
        $success = 'Envoyer avec succès !';
        header( 'Location: /index#centres');
    } else {
        $erreur = 'Echec lors de l\'envoie !';
        header('Location: /index#centres');
    }
//paramètre de l'envoie de message

    $to = 'valerie.ekoume@gmail.com'; // Ajout de l'adresse mail qui va recevoir les messages
    $email_subject = "Website Contact Form:  $nom";
    $email_body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site Web.\n\n".
                  "Voici les détails:\n\nName: $nom\n\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: valerie.ekoume@gmail.com\n"; // This is the email address the generated message will be from.
    // We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email";
    $send = mail($to,$email_subject,$email_body,$headers);
}




