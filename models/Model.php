<?php

abstract class Model
{
    private  static $_bdd;

    // INSTANCIE LA CONNEXION A LA BDD
    private static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost; dbname=tp', 'root', '');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //RECUPERE LA CONNEXION A LA BDD
    protected function getBdd()
    {
        if(self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }

    protected function getAll($table, $obj)
    {
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table. ' ORDER BY id DESC ');

        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }

        return $var;
        $req->closeCursor();
    }

    public function insert($name, $message) {
        $bdd = $this->getBdd();

        $insertmsg = $bdd->prepare('INSERT INTO tchat(pseudo, message) VALUES (?, ?)');
        $insertmsg->execute(array($name, $message));

    }

}