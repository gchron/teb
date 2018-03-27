<?php

include_once 'Osoba.php';

class Pracownik extends Osoba {

    public $badaniaLekarskie, $pensja;

    function getPensja() {
        return ' najnizsza krajowa';
    }
    function getDochody(){
        echo parent::getDochody();
        return 'dochód pracownika z premią';
    }

}
