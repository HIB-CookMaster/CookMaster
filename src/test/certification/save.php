<?php
// Récupérer les données JSON envoyées
$inputData = file_get_contents('php://input');

// Convertir les données JSON en objet PHP
$data = json_decode($inputData);

// Récupérer les variables
$jsonData = json_decode($data->jsonData);
$infos = json_decode($data->infos); // Convert the JSON string into a PHP object

if(!empty($infos->certifName)) {
    $filename = $infos->certifName;
} else {
    $filename = "default"; // si le nom est vide, utilisez un nom de fichier par défaut
}

// Ajoutez l'objet infos au JSON
$jsonDataWithInfos = array(
    "infos" => $infos,
    "data" => [$jsonData]
);

// Convertir le tableau PHP en une chaîne JSON
$jsonDataWithInfosString = json_encode($jsonDataWithInfos);

// Utiliser les variables comme vous le souhaitez
// Par exemple, écrire les données JSON dans un fichier avec le nom de fichier spécifié
$file = $filename . '.json';
file_put_contents($file, $jsonDataWithInfosString);

// Répondre avec un message de réussite
$response = "JSON data and infos saved successfully with filename: " . $filename;
echo $response;
