<?php
  class Personnage {
    protected $nom = "manelle";
    public $genre;
    public $taille;
    public $intel;
    public $force;
    public $dexterite;
    public $apparence;
    public $vitesse;
    public $attaque;
    public $defense;

    protected const AVATAR = "images/common/avatar.jpg";

    // getter
    public function get_nom() {
      return $this->nom;
    }

    public function __construct($n, $g) {
      $this->nom = $n;
      $this->genre = $g;
    }

    // setter
    public function set_nom($n) {
      $this->nom = $n;
    }
  }

  class Magicien extends Personnage {
    // on change l'avatar:
    public const AVATAR = "images/common/avatar.jpg";
    // méthode pour récupérer le nom (qui est en protected):
    public function get_nom() {
      return "*** ".$this->nom." ***";
    }
    public function get_avatar(){
      // return self::AVATAR;
      return parent::AVATAR;
    }
  }


// Animaux :

class Animal {
  protected $nom;
  public $race;
  public $pelage;
  public $nbpattes;
  public $vertebre;
  public $milieu;
  public $nourriture;

  // getter
  public function get_nom() {
    return $this->nom;
  }

  public function __construct($n, $r) {
    $this->nom = $n;
    $this->race = $r;
  }

  public function __destruct() {
    // ici on fait des trucs avant que l'objet soit détruit
  }

  // setter
  public function set_nom($n) {
    $this->nom = $n;
  }
}

class Chien extends Animal {
  public function get_nom() {
    return "*** ".$this->nom." ***";
  }
}
