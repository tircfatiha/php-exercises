<?php
class Produit {
    public $nom;
    public $prix;

    function __construct($nom, $prix) {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    function getPrixTTC() {
        return $this->prix * 1.2;
    }
}

$products = [
    new Produit("PC", 500),
    new Produit("Phone", 300),
    new Produit("Tablet", 200)
];

foreach ($products as $p) {
    echo $p->nom . " : " . $p->getPrixTTC() . "<br>";
}
?>
