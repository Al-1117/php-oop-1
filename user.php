<?php
// Creo la classe con le relative voci per ogni utente -->
class User {
  public $nome;
  public $cognome;
  public $id_utente;
  public $eta;
  public $regione;

  public function __construct($_nome, $_cognome, $_id_utente, $_eta, $_regione);
}

?>
