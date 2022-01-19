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
    public function get_nom() {
      return "*** ".$this->nom." ***";
    }
  }


// Animaux :

class Animal {
  protected $nom;
  public $pelage;
  public $nbpattes;
  public $mammifere;
  public $vertebre;
  public $milieu;
  public $nourriture;

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

class Cri extends Animal {
  public function get_nom() {
    return "*** ".$this->nom." ***";
  }
}