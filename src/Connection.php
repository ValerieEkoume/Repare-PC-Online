<?php


namespace App;
use PDO;


class Connection
{
    /**
     * @reture PDO
     */

    public function getPdo()
    {
        return new PDO('mysql:dbname=repare_online; host=127.0.0.1', 'root', 'toortoor', [
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

}

