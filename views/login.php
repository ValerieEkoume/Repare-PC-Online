<?php
use App\Connection;
$pdo = (new Connection())->getPdo();
$result = "";
require '../views/header.html';



if (isset($_POST['submit'])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo 'Tous les champs sont requis';

    }
    // Si tous les champs sont complétés
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sth=$pdo->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
        $sth->bindParam(':username', $username);
        $sth->execute(['username'=>$username, 'password'=>$password]);
        $result=$sth->fetch();
        session_start();
        // Permet de vérifier que la session est bien ouverte et que nous avons bien un utilisateur
        $_SESSION['connecte'] = 1;
        //Récupération du $username pour notre session en lien avec DataLogin
        $_SESSION['username'] = "$username";

    } else {
        $erreur='Identifiants incorrectes ';
    }

    require_once '../views/functions/auth.php';
    if (est_connecte()) {
        header('Location: /admin');
        exit();
    }

        if ($result == false) {
            echo "Vos identifiants ne sont pas correctes, veuillez les saisir à nouveau";
        } else {
            header('Location: /admin');

        }





}

?>



<div id="form-adm">
    <h2 class="form-adm-h2">CONNECTEZ-VOUS</h2>

    <form action="#" method="POST">
        <div >
            <label for="username"></label>
            <input type="text" name="username" placeholder="Nom">
        </div>

        <div >
            <label for="password"></label>
            <input type="password" name="password" placeholder="Mot de passe">
        </div>

        <div>
            <button class="" type="submit" value="Add" name="submit">Se connecter</button>
        </div>

    </form>

</div>

</body>
</html>