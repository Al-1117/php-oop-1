
<!-- Consegna: -->
<!-- Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users. -->

<?php

// Includo il file contenente il diagramma

  include __DIR__ . '/diagramma.php';

  // Creo la classe con le relative voci per ogni utente
  class User {
    public $nome;
    public $cognome;
    public $id_utente;
    public $eta;
    public $regione;
  }

  // Inizializzo un ciclo foreach per iterare e stampare ogni singolo utente
  // in un nuovo oggetto

  foreach ($users as $user) {


    $single_user = new User();
    $single_user->nome = $user['nome'];
    $single_user->cognome = $user['cognome'];
    $single_user->id_utente = $user['id_utente'];
    $single_user->eta = $user['eta'];
    $single_user->regione = $user['regione'];

    echo 'Nome e cognome: ' . $single_user->nome . ' ' . $single_user->cognome . '<br>';
    echo 'Id utente: ' . $single_user->id_utente . '<br>';
    echo 'Eta: ' . $single_user->eta . '<br>';
    echo'Regione: ' .  $single_user->regione . '<br>' . '<br>';

  }







?>
