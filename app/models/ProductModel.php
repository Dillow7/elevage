<?php

namespace app\models;
use Flight;

class ProductModel {

    public function __construct(){
        // Vous pouvez initialiser des valeurs ou des ressources ici si nécessaire
    }

    public function getProduct() {
        // Données des produits (exemple)
        return [
            'produits' => [
                ['nom' => 'Produit 1', 'prix' => 19.99, 'image' => 'produit1.jpg'],
                ['nom' => 'Produit 2', 'prix' => 29.49, 'image' => 'produit2.jpg'],
                ['nom' => 'Produit 3', 'prix' => 39.00, 'image' => 'produit3.jpg'],
                ['nom' => 'Produit 4', 'prix' => 49.99, 'image' => 'produit4.jpg'],
                ['nom' => 'Produit 5', 'prix' => 59.99, 'image' => 'produit5.jpg'],
                ['nom' => 'Produit 6', 'prix' => 69.00, 'image' => 'produit6.jpg'],
                ['nom' => 'Produit 7', 'prix' => 79.99, 'image' => 'produit7.jpg'],
                ['nom' => 'Produit 8', 'prix' => 89.49, 'image' => 'produit8.jpg']
            ]
        ];
    }
}
