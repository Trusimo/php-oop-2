<?php
class Prodotti {
    protected $prezzo;
    protected $tagliaAnimale;
    protected $sconto = 0;

    function setSconto() {
        // se la nuova mail è presente nel database
        if (array_key_exists("newUserEmail", "emailDB")) {
            // allora c'è lo sconto
            $this->sconto = 20;
        }
    }
}

class Cibo extends Prodotti {
    protected $scadenza;
    protected $carne;
    protected $pesce;
}

class Accessori extends Prodotti {
    protected $giocattoli;
    protected $cucce;
    protected $collari;
}

class Cura extends Prodotti {
    protected $pulizia;
    protected $curaPelo;
    protected $antipulci;
}