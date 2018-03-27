<?php

include_once 'Osoba.php';

class Student extends Osoba {
    
    public $numerIndeksu, $stypendium;
    
    function getStypendium(){
        return 'stypednium biednego studenta';
    }
    function getDochody(){
        echo parent::getDochody();
        return 'dochody studenta z pracy jako biały murzyn';
    }
}
