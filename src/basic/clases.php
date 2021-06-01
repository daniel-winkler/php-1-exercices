<?php

class Contacto {
  public $nombre;
  public $telefono;

  public function __construct(string $name, int $phone) {
    $this->nombre = $name;
    $this->telefono = $phone;
  }

  public static function imprimeAlgo() {
    echo "hola".PHP_EOL;
  }
}

$contacto1 = new Contacto('Daniel', 62452342);

var_dump($contacto1);
Contacto::imprimeAlgo(); // doble dos puntos :: accede a una funcion estatica dentro de una Clase

class Archer {
  private string $name;
  private int $attack;
  private int $shield;
  private int $lifePoints;

  public function __construct(string $name) {
    $this->name = $name;
    $this->attack = 5;
    $this->shield = 1;
    $this->lifePoints = 13;
  }

  public function getName(): string {
    return $this->name;
  }

  public function attack($enemy): void {
    // ...
  }

  public function healSelf($healPoints) {
    $this->lifePoints += $healPoints;
  }
}