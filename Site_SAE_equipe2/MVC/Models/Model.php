<?php

class Model
{
    /**
     * Attribut contenant l'instance PDO
     */
    private $bd;

    /**
     * Attribut statique qui contiendra l'unique instance de Model
     */
    private static $instance = null;

    /**
     * Constructeur : effectue la connexion à la base de données.
     */
    private function __construct()
    {
        include "C:\PHP\www\MVC\Controllers\connec.php";
        $this->bd = new PDO("mysql:host".$HOST.";dbname=".$DB_NAME,$USER,$PASS);
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }

    /**
     * Méthode permettant de récupérer un modèle car le constructeur est privé (Implémentation du Design Pattern Singleton)
     */
    public static function getModel()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getEleve($id){
        $requete = $this->bd->prepare('Select * from etudiants WHERE id = :id');
        $requete->bindValue(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getAllEleve(){
        $requete = $this->bd->prepare('Select * from etudiants');
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get10Eleve(){
        $requete = $this->bd->prepare('Select * from etudiants limite 10');
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPersonnel($id){
        $requete = $this->bd->prepare('Select * from personnel WHERE id = :id');
        $requete->bindValue(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePersonnel($infos){
        $requete = $this->bd->prepare('UPDATE personnel SET nom = :nom, prenom = :prenom, mail = :mail, telephone = :telephone, mdp = :mdp');
        $marqueurs = ['nom', 'prenom', 'mail', 'telephone', 'mdp'];
        foreach ($marqueurs as $value) {
            $requete->bindValue(':' . $value, $infos[$value]);
        }
        $requete->execute();
        return (bool) $requete->rowCount();
    }

    public function classeDefault(){
        $req = $this->bd->prepare('Select * from Formation');
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);        
    }

    public function getLogin($mail){
        $requete = $this->bd->prepare('Select * from Login WHERE Username = :mail');
        $requete->bindValue(':user', $mail);
        $requete->execute(["user" => $mail]);
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function getmdp($mdp){
        $requete = $this->bd->prepare('Select * from Login WHERE Password = :mdp');
        $requete->bindValue(':mdp', $mdp);
        $requete->execute(["mdp" => $mdp]);
        return $requete->fetch(PDO::FETCH_ASSOC);
    }
}
