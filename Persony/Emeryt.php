<?php

include_once 'Osoba.php';

class Emeryt extends Osoba {

    public $emerytura;

    function getEmerytura() {
        return 'remerytura';
    }

    function getDochody() {
        echo parent::getDochody();
        return 'funkcja getDochody z klasy Emeryt';
    }

}
