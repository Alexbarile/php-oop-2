<?php

    class InfoElementThree extends products{
        public $caratteristiche;
        public $dimensioni;

        function __construct($_immagine, $_nome, $_prezzo, $_razza, $_caratteristiche, $_dimensioni){

            parent::__construct($_immagine, $_nome, $_prezzo, $_razza);
            $this->caratteristiche = $_caratteristiche;
            $this->dimensioni = $_dimensioni;
        }
    }

?>