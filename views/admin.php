<?php
//require '../views/header.html';
//Connection à la BDD
require '../views/header.html';
require_once 'functions/auth.php';
session_start();
//force_utilisateur_connecte();
use App\Connection;
use App\DataLogin;
use App\User;

$pdo = (new Connection())->getPdo();
$user = new DataLogin();




//Get the page via GET request (URL param: page), if non exist default the page to 1
// $page = the page the user is currently on
//$record_per_page will be used to limit the number of records dicplay on on each page
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 5;

//Préparer la requête SQL and get records from our contacts table, LIMIT determine the page
$sth = $pdo->prepare('SELECT * FROM centres ORDER BY id LIMIT :current_page, :records_per_page');
$sth->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$sth->bindValue(':records_per_page', $records_per_page, PDO::PARAM_INT);
$sth->execute();

//fetch the records so we can display them in our template
$centres = $sth->fetchAll(PDO::FETCH_ASSOC);
////Get the total number of contacts, this is so we can determine whether there should be a next and previous buttom
$num_centres = $pdo->query('SELECT COUNT(*) FROM centres')->fetchColumn();
?>




<body >

<?php

    if (isset($_SESSION['username'])) {

        echo  '<div id=welcome>' .'Bonjour'. '&nbsp&nbsp' .$_SESSION['username']. '&nbsp&nbsp'. 'et' . '&nbsp&nbsp' .
                'bienvenue'. '&nbsp&nbsp' . 'dans' . '&nbsp&nbsp' . 'votre' . '&nbsp&nbsp' . 'espace' . '&nbsp&nbsp' .
                'de' . '&nbsp&nbsp' . 'gestion' . '.' .'</div>';
    }

?>

<div class="admin">
    <h2 class="titre">Les Centres</h2>

<!--        <a  id="deconnect" href="/ajouter" >Se déconnecter</a>-->

    <div class="create-centres">
        <a  class="creat" href="/ajouter" >Ajouter un centre</a>
    </div>



    <table>
        <thead>
        <tr>
            <td>#</td>
            <td>Nom du centre</td>
            <td>Adresse</td>
            <td>Téléphone</td>
            <td>Latitude</td>
            <td>Longitude</td>
            <td>Ouverture</td>
            <td>Fermeture</td>
            <td>Créé le</td>
        </tr>
        </thead>
        <tbody>
        <?php  foreach ($centres as $centre) :?>
            <tr>
                <td><?=$centre['id']?></td>
                <td><?=$centre['nom_centre']?></td>
                <td><?=$centre['adresse']?></td>
                <td><?=$centre['tel']?></td>
                <td><?=$centre['latitude']?></td>
                <td><?=$centre['longitude']?></td>
                <td><?=$centre['ouverture']?></td>
                <td><?=$centre['fermeture']?></td>
                <td><?=$centre['created']?></td>
                <td class="actions">
                    <a href="/update?id=<?=$centre['id']?>" class="edit"><i class="fas fa-user-edit"></i></a>
                    <a href="/delete?id=<?=$centre['id']?>" class="trash"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <div class="pagination">
        <?php if ($page>1): ?>
            <a href="/admin?page=<?=$page-1?>"><i class="fas fa-angle-double-left"></i></a>
        <?php endif; ?>
        <?php if ($page*$records_per_page < $num_centres): ?>
            <a href="/geek?page=<?=$page+1?>"><i class="fas fa-angle-double-right"></i></a>
        <?php endif; ?>


    </div>

</div>
<div id="logout">
    <!--    --><?php //if ($user->getUsers()): ?>
    <a class="nav-link nav-item" href="/logout">Déconnexion</a>
    <!--    --><?php //endif; ?>
</div>
</body>

</html>
