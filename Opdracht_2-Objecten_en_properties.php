<?php
/**
 * Created by PhpStorm.
 * User: rwfli
 * Date: 2/6/2019
 * Time: 12:10
 */

class Auto {
    public function __construct($merk, $klant, $soort, $kenteken){
        $this->merk = $merk;
        $this->klant = $klant;
        $this->soort = $soort;
        $this->kenteken = $kenteken;
    }
}

class Klant {
    public function __construct($klantid, $email, $telnumber, $apkkeuring){
        $this->klantid = $klantid;
        $this->email = $email;
        $this->telnumber = $telnumber;
        $this->apkkeuring = $apkkeuring;
    }
}

class Nieuwsbrief {
    public function __construct($onderwerp, $klant, $datum, $content){
        $this->onderwerp = $onderwerp;
        $this->klant = $klant;
        $this->datum = $datum;
        $this->content = $content;
    }
}

$auto1 = new Auto("Mercedes", "Ruben Flinterman", "Mercedes Sport", "aaa-bb-66");
$klant1 = new Klant("Ruben Flinterman", "r.w.flinterman@hotmail.com", "0629901515", "19-12-2000");
$nieuwsbrief1 = new Nieuwsbrief("Nieuwste autos!", "Ruben Flinterman", "19-12-2000", "De mooiste autos deze winter zijn hier!");

var_dump($auto1);
var_dump($klant1);
var_dump($nieuwsbrief1);
//    print_r();
