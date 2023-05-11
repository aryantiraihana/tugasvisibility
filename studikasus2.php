<?php 

class document{
    public $judul;
    private $info;

    public function judul($judul){
        echo $this->judul = $judul;
        echo "<br>";
    }

    public function baca($baca){
        echo $this->info = $baca;
    }

}

$orangkepo = new document();
$orangkepo->judul("Rumpi No Secret");
$orangkepo->baca("Kepo");

?>