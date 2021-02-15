<?php


namespace App;


class DataLogin
{
    public function getUsers() {
        $username = $_SESSION["username"];
        //Connexion à la bas de donnée

        $pdo = (new Connection())->getPdo();

        //Requête pour récupérer les infos du user
        $query = $pdo->prepare("SELECT * FROM user WHERE username = 'username'");
        $query ->execute();
        $user = $query->fetch();
        return $user;
    }

}