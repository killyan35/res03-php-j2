<?php 

$votreTableauassociatif = [
    "nom" => "",
    "prenom" => "",
    "email" => "",
    "telephone" => "",
    "linkedin" => "",
    "github" => "",
    "biographie" => "",
    "loisir-1" => "",
    "loisir-2" => "",
    "loisir-3" => "",
    "loisir-4" => "",
    "lang" => "",
    "software" => "",
    "language" => "",
    "frameworks" => ""
    
];

if (isset($_POST['frameworks'])) 
{
    $votreTableauassociatif['frameworks'] = $_POST['frameworks'];
}
if (isset($_POST['language'])) 
{
    $votreTableauassociatif['language'] = $_POST['language'];
}
if (isset($_POST['software'])) 
{
    $votreTableauassociatif['software'] = $_POST['software'];
}
if (isset($_POST['lang'])) 
{
    $votreTableauassociatif['lang'] = $_POST['lang'];
}
if (isset($_POST['nom'])) 
{
    $votreTableauassociatif['nom'] = $_POST['nom'];
}
if (isset($_POST['prenom'])) 
{
    $votreTableauassociatif['prenom'] = $_POST['prenom'];
}
if (isset($_POST['email'])) 
{
    $votreTableauassociatif['email'] = $_POST['email'];
}

if (isset($_POST['telephone'])) 
{
    $votreTableauassociatif['telephone'] = $_POST['telephone'];
}
if (isset($_POST['linkedin'])) 
{
    $votreTableauassociatif['linkedin'] = $_POST['linkedin'];
}
if (isset($_POST['github'])) 
{
    $votreTableauassociatif['github'] = $_POST['github'];
}
if (isset($_POST['biographie'])) 
{
    $votreTableauassociatif['biographie'] = $_POST['biographie'];
}
if (isset($_POST['loisir-1'])) 
{
    $votreTableauassociatif['loisir-1'] = $_POST['loisir-1'];
}
if (isset($_POST['loisir-2'])) 
{
    $votreTableauassociatif['loisir-2'] = $_POST['loisir-2'];
}
if (isset($_POST['loisir-3'])) 
{
    $votreTableauassociatif['loisir-3'] = $_POST['loisir-3'];
}
if (isset($_POST['loisir-4'])) 
{
    $votreTableauassociatif['loisir-4'] = $_POST['loisir-4'];
}

require './cv.phtml';

?>