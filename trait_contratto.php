<!-- Creo il trait del contratto -->

<?php
  trait Contratto {
    private $compenso;
    public $livello = 5;


    private function getCompenso()
    {
      return $compenso;
    }
  }

?>
