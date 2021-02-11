<?php

use App\Connection;
$pdo = (new Connection())->getPdo();

$msg = "";
//require '../views/header.html';
// Vérifier que les données POST ne sont pas vide

if (!empty($_POST)) {
    //Post data not empty insert a new record
    //Setting the variables that going to be inserted, check if the POST variables  exist if not we default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;

    // Check if POST variable "name" exists, if not default value to blank
    $nom_centre = isset($_POST['nom_centre']) ? $_POST['nom_centre'] : '';
    $adresse =isset ($_POST['adresse']) ? $_POST['adresse'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $latitude = isset($_POST['latitude']) ? $_POST['latitude'] : '';
    $longitude = isset($_POST['longitude']) ? $_POST['longitude'] : '';
    $ouverture = isset($_POST['ouverture']) ? $_POST['ouverture'] : '';
    $fermeture = isset($_POST['fermeture']) ? $_POST['fermeture'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');

    //insert the new record into the centres table

    $sth = $pdo->prepare('INSERT INTO centres VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
    //$sth->execute([$id, $nom_centre, $adresse, $tel, $latitude, $longitude, $created]);
//    $centres = $sth->fetchAll();
//    $msg = 'Le centre a bien été créé';


}
?>
<link rel="stylesheet" href="../assets/css/style.css">
<script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>

<body>

<div class="create">
    <h2 id="create_h2">Créer un centre</h2>
    <a href="/admin" id="chevron"><i class="fas fa-angle-double-left"></i></a>
    <form id="form_create" action="/ajouter" method="post">
            <label for="id">ID</label>
            <input type="text" name="id" value="auto" placeholder="id"  id="id">
            <label for="nom_centre">Nom du Centre</label>
            <input type="text" name="nom_centre" placeholder="Nom du centre"  id="tel">

            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" placeholder="adresse"  id="adresse">
            <label for="tel">n° de téléphone</label>
            <input type="tel" name="tel" placeholder="N° de téléphone"  id="tel">

            <label for="tel">latitude</label>
            <input type="text" name="latitude" placeholder="Latitude"  id="latitude">
            <label for="tel">longitude</label>
            <input type="text" name="Longitude" placeholder="Longitude"  id="Longitude">

            <label for="tel">ouverture</label>
            <input type="text" name="ouverture" placeholder="Horaire d'ouverture"  id="ouverture">
            <label for="tel">fermeture</label>
            <input type="text" name="fermeture" placeholder="Horaire de fermeture"  id="fermeture">

            <label for="created">Mise à jour le</label>
            <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">

            <input type="submit" value="Créer">





<!--            <a href="/home"><button type="submit" class="retour">retour</button></a>-->
    </form>
    <?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php endif; ?>

</div>

</body>
