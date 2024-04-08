<?php


Class Movie{
    public $titolo, $mainCharacter, $durata, $genere, $regista;


    function __construct($titolo, $mainCharacter, $durata, $genere, $regista){

        $this->titolo=$titolo;
        $this->mainCharacter=$mainCharacter;
        $this->durata=$durata;
        $this->genere=$genere;
        $this->regista=$regista;

    }

}

