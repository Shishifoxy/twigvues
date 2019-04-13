<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
$products = ['Produit1', 'Produit2', 'Produit3', 'Produit4', 'Produit5'];
echo $twig->render('/home/index.html.twig',['products' => $products] );