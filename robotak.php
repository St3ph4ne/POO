<?php

class Robot {

  private $name;
  private $x;
  private $y;
  private $orientation;
  private $size;
  private $couleur;
  private $action;
  private $autonomie;
  private $maxspeed;
  private $arena;

  public function __construct($n, $x, $y, $o, $s, $c, $ac, $au, $m, $ar) {
    $this->name = $n;
    $this->x = $x;
    $this->y = $y;
    $this->orientation = $o;
    $this->size = $s;
    $this->couleur = $c;
    $this->action = $ac;
    $this->autonomie = $au;
    $this->maxspeed = $m;
    $this->arena = $ar;
    array_push($this->arena->bots, $this);

  }


  public function get_position() {
    return [$this->x , $this->y , $this->orientation];
  }

  public function move($longueurx, $longueury) {
    $this->x += $longueurx;
    $this->y += $longueury;
    $this->arena->get_bot_pos($bot1);
  }

  public function turn($orientation) {
    $this->orientation = $orientation;

  }

  public function exec($action) {

  }

  public function speak($action) {

  }

}


class Arena {
  private $name = "DEATH ROBOT ARENA";
  private $sizex;
  private $sizey;
  private $objects;

  public function __construct($n, $sx, $sy) {
    $this->name = $n;
    $this->sizex = $sx;
    $this->sizey = $sy;
  }

  public function get_bot_pos($bot, $posx, $posy) {
    $this->bot1 = $bot;
    $this->bot1->x = $posx;
    $this->bot1->y = $posy;
  }
}

$arena1 = new Arena("KEKW", 50, 50);

$bot1 = new Robot("Philippe", 0, 0, 45, "small", "blue", "collect", 2, 2);

echo "<pre>";
echo $bot1->get_position(); // controle d'affichage
var_dump($bot1->get_position());
$bot1->turn(90);
$bot1->move(50, 50);
var_dump($bot1->get_position());

$bot2 = new Robot("Philippe", 100, 100, 45, "small", "red", "run", "collect", 2, 2);
$bot1->move(50, 50);

?>