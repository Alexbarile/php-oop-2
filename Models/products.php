<?php

    class Products{
        public $immagine;
        public $nome;
        public $altro;
        public $prezzo;

        function __construct($_immagine, $_nome, $_altro, $_prezzo){
            $this->immagine = $_immagine;
            $this->nome = $_nome;
            $this->altro = $_altro;
            $this->prezzo = $_prezzo;
        }
    }


?>