
<!-- Consegna: -->
<!-- Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users. -->

<?php

// Includo il file contenente il diagramma

  include __DIR__ . '/diagramma.php';
  require_once(__DIR__ . '/user.php');
  require_once(__DIR__ . '/administrator.php');


  // Inizializzo un ciclo foreach per iterare e stampare ogni singolo utente
  // in un nuovo oggetto

  foreach ($users as $user) {


    $single_user = new User();
    $single_user->nome = $user['nome'];
    $single_user->cognome = $user['cognome'];
    $single_user->id_utente = $user['id_utente'];
    $single_user->eta = $user['eta'];
    $single_user->regione = $user['regione'];

    // Stampo i dati a schermo
   echo 'Nome e cognome: ' . $single_user->nome . ' ' . $single_user->cognome . '<br>';
   echo 'Id utente: ' . $single_user->id_utente . '<br>';
   echo 'Eta: ' . $single_user->eta . '<br>';
   echo'Regione: ' .  $single_user->regione . '<br>' . '<br>';


  }

  // Aggiungo l'amministratore

  $administrator = new Administrator('Lucia', 'Noris', 'ciano5', 46, 'Thies');

  var_dump($administrator);


?>


<?php


  // public function printAllDatas($data){
  //
  //   return echo 'Nome e cognome: ' . $data->nome . ' ' . $data->cognome . '<br>';
  //   return echo 'Id utente: ' . $data->id_utente . '<br>';
  //   return echo 'Eta: ' . $data->eta . '<br>';
  //   return echo'Regione: ' .  $data->regione . '<br>' . '<br>';
  //
  // }

 ?>
