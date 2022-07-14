<?php
class Prodotti {
    public $nome;
    public $prezzo;
    public $tagliaAnimale;
    public $marca;
    public $sconto = 0;

    function setSconto() {
        // se la nuova mail è presente nel database
        if (array_key_exists("newUserEmail", "emailDB")) {
            // allora c'è lo sconto
            $this->sconto = 20;
        }
    }
}

class Cibo extends Prodotti {
    public $carne;
    public $pesce;
}

// Primo prodotto cibo
$dentastixSmall = new Cibo();
$dentastixSmall->nome = "Dentastix: bastoncini taglia 1-10kg";
$dentastixSmall->prezzo = 2;
$dentastixSmall->tagliaAnimale = "piccola";
$dentastixSmall->marca = "Dentastix";
$dentastixSmall->carne = TRUE;
// var_dump($dentastixSmall);

// Secondo prodotto cibo
$crocchetteSalmone = new Cibo();
$crocchetteSalmone-> nome = "Crocchette al salmone Purina";
$crocchetteSalmone->prezzo = 6;
$crocchetteSalmone->tagliaAnimale = "grande";
$crocchetteSalmone->marca = "Purina";
$crocchetteSalmone->pesce = TRUE;
// var_dump($crocchetteSalmone);


class Accessori extends Prodotti {
    public $giocattoli;
    public $cucce;
    public $collari;
}
//  Primo prodotto accessori
$pallinaGomma = new Accessori();
$pallinaGomma->nome = "Pallina di gomma";
$pallinaGomma->prezzo = 10;
$pallinaGomma->marca = "DogGames";
$pallinaGomma->giocattoli = TRUE;
// var_dump($pallinaGomma);

// Secondo prodotto accessori
$collareLuminoso = new Accessori();
$collareLuminoso->nome = "Collare luminoso per cani 1-10kg";
$collareLuminoso-> prezzo = 20;
$collareLuminoso->tagliaAnimale = "piccola";
$collareLuminoso->marca = "PetStore";
$collareLuminoso->collari = TRUE;
// var_dump($collareLuminoso);


class Cura extends Prodotti {
    public $pulizia;
    public $curaPelo;
    public $antipulci;
}

// Primo prodotto Cura
$shampooCani = new Cura();
$shampooCani->nome = "Shampoo pulizia taglia 30kg<";
$shampooCani->prezzo = 16;
$shampooCani->tagliaAnimale = "grande";
$shampooCani->marca = "SweetDog";
$shampooCani-> pulizia = TRUE;
// var_dump($shampooCani);

// Secondo prodotto Cura 
$antiPulciBaby = new Cura();
$antiPulciBaby-> nome = "Gocce antipulci BabyDog";
$antiPulciBaby-> prezzo = 30;
$antiPulciBaby->tagliaAnimale = "piccola";
$antiPulciBaby->marca = "BabyDog";
$antiPulciBaby->antipulci = TRUE;
// var_dump($antiPulciBaby);

?>

<h1>Lista Prodotti PetShop</h1>
<h2>Cibo</h2>
<div> <?php echo $dentastixSmall->nome . " per animali di taglia " . $dentastixSmall->tagliaAnimale . ", costo: euro " . $dentastixSmall->prezzo?></div>
<div> <?php echo $crocchetteSalmone->nome . " per animali di taglia " . $crocchetteSalmone->tagliaAnimale . ", costo: euro " . $crocchetteSalmone->prezzo?></div>

<h2>Accessori</h2>
<div> <?php echo $pallinaGomma->nome . " di marca " . $pallinaGomma->marca . ", costo: euro " . $pallinaGomma->prezzo?></div>
<div> <?php echo $collareLuminoso->nome . " per animali di taglia " . $collareLuminoso->tagliaAnimale . ", di marca " .$collareLuminoso->marca . ", costo: euro " . $collareLuminoso->prezzo?></div>

<h2>Cura</h2>
<div> <?php echo $shampooCani->nome . " per animali di taglia " . $shampooCani->tagliaAnimale . ", di marca " .$shampooCani->marca . ", costo: euro " . $shampooCani->prezzo?></div>
<div> <?php echo $antiPulciBaby->nome . " per animali di taglia " . $antiPulciBaby->tagliaAnimale . ", di marca " .$antiPulciBaby->marca . ", costo: euro " . $antiPulciBaby->prezzo?></div>
