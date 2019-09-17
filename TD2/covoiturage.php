<?php
require_once 'Model.php';
class Utilisateur {

    private $login;
    private $nom;
    private $prenom;

    /**
     * Utilisateur constructor.
     * @param $login
     * @param $nom
     * @param $prenom
     */
     public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
        // Si aucun de $m, $c et $i sont nuls,
        // c'est forcement qu'on les a fournis
        // donc on retombe sur le constructeur à 3 arguments
        $this->login = $m;
        $this->nom = $c;
        $this->prenom = $i;
        }
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public static function getAllUtilisateurs(){
        $rep = Model::$pdo->query('SELECT * FROM utilisateur');

        $tab_obj = $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $tab_voit = $rep->fetchAll();

        foreach ($tab_voit as $key1 => $valeur1){
          $valeur1->afficher();
        }
    }

    public function afficher(){
        echo "Login : " . $this->login . "Nom : " . $this->nom ."Prenom : " . $this->prenom;
    }
    

}

class Trajet {

    private $id;
    private $depart;
    private $arrivee;
    private $date;
    private $nbplaces;
    private $prix;
    private $conducteur_login;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param mixed $depart
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;
    }

    /**
     * @return mixed
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }

    /**
     * @param mixed $arrivee
     */
    public function setArrivee($arrivee)
    {
        $this->arrivee = $arrivee;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getNbplaces()
    {
        return $this->nbplaces;
    }

    /**
     * @param mixed $nbplaces
     */
    public function setNbplaces($nbplaces)
    {
        $this->nbplaces = $nbplaces;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getConducteurLogin()
    {
        return $this->conducteur_login;
    }

    /**
     * @param mixed $conducteur_login
     */
    public function setConducteurLogin($conducteur_login)
    {
        $this->conducteur_login = $conducteur_login;
    }

    public function __construct($data = null) {

        if(!$data = null){
            foreach (get_class_vars('Utilisateur') as $key => $value){
                $this->key = $data[$key];
            }
        }

    }

    public static function getAllTrajets(){
        $rep = Model::$pdo->query('SELECT * FROM trajet');

         $tab_obj = $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
        $tab_voit = $rep->fetchAll();

        foreach ($tab_voit as $key1 => $valeur1){
          $valeur1->afficher();
        }
    }

     public function afficher() {
        echo "Le trajet " . $this->id . " proposé par " . $this->conducteur_login . " partira de " . $this->depart . " vers " . $this->arrivee . " pour le prix de " . $this->prix  ." et propose " . $this->nbplaces ." pour le " . $this->date;
    }

    
}
