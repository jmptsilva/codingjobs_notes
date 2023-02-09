<?php

require_once 'Flower.php';

class FlowerManager
{
    private static function get_PDO()
    {
        return new PDO('mysql:host=localhost;dbname=flower_db', 'jsilva', 'j0m4n3ls');
    }


    public static function findAll()
    {
        $pdo = self::get_PDO();

        $query = 'SELECT * FROM flowers';

        $result = $pdo->query($query);

        $results = $result->fetchAll(PDO::FETCH_CLASS, 'Flower');

        $pdo = null;

        return $results;
    }

    public static function find($id)
    {
        $pdo = self::get_PDO();
        $query = 'SELECT * FROM flowers WHERE id = :id';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':id', $id);
        $prep->execute();
        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $prep->fetch();
        $pdo = null;
        return $flower;

        /* $prep = $pdo->prepare($query);

        $prep->bindValue(':id', $id);

        $prep->execute();

        $result = $prep->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        return $result; */
    }
}
