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

    function stampa(){
        return "Il titolo del film è: $this->titolo <br>
                La sua durata è di $this->durata minuti e il suo Protagonista è $this->mainCharacter. <br>
                <strong>GENERE</strong>: $this->genere. <br>
                <strong>Regista:</strong>$this->regista.";
    }

}

