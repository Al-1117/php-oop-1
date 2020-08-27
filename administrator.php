<?php
// Includo il trait del contratto
require_once(__DIR__ . '/trait_contratto.php');

  // Creo la classe amministratore estendendo la classe user

  class Administrator extends User{

    use Contratto;

    protected $password_admin = '1236';

  }



 ?>
