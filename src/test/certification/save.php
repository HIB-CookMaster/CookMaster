<?php
// Récupérer les données JSON envoyées
$jsonData = file_get_contents('php://input');

// Convertir les données JSON en objet PHP
$data = json_decode($jsonData);

// Vérifier les données reçues
var_dump($data);

// Récupérer les variables
$jsonDataString = $data->jsonData;
$filename = $data->infos->filename;

// Vérifier le nom du fichier
var_dump($filename);

// Récupérer les informations
$infos = $data->infos;

// Décoder les données JSON pour les convertir en objet PHP
$jsonData = json_decode($jsonDataString);

// Ajouter les informations à jsonData
$jsonData->infos = $infos; 

// Convertir le tout en JSON
$finalJsonData = json_encode($jsonData);

// Utiliser les variables comme vous le souhaitez
// Par exemple, écrire les données JSON dans un fichier avec le nom de fichier spécifié
$file = $filename . '.json';
$result = file_put_contents($file, $finalJsonData);

// Vérifier le résultat de la création du fichier
if ($result === false) {
    echo 'Erreur lors de la création du fichier';
} else {
    echo 'Le fichier a été créé avec succès';
}

// Répondre avec un message de réussite
$response = "JSON data and info saved successfully with filename: " . $filename;
echo $response;
?>