
<!-- Consegna: -->
<!-- Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users. -->

<?php


  // Creo il database in un formato array contenente i dati di ogni singolo utente

  // Database
  $users = [

    // Singolo utente
    [
      "nome" => "Mario",
      "cognome" => "Rossi",
      "id_utente" => "mario_rossi7",
      "eta" => "20",
      "regione" => "Piemonte"
    ],
    [
      "nome" => "Luca",
      "cognome" => "Verdi",
      "id_utente" => "luca_verdi10",
      "eta" => "30",
      "regione" => "Toscana"
    ],
    [
      "nome" => "Nadia",
      "cognome" => "Lussu",
      "id_utente" => "nadia_lussu23",
      "eta" => "25",
      "regione" => "Sardegna"
    ],



  ];

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

    var_dump($single_user);

  }







?>
