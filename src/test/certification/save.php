<?php
// Récupérer les données JSON envoyées
$jsonData = file_get_contents('php://input');

// Convertir les données JSON en objet PHP
$data = json_decode($jsonData);

// Récupérer les variables
$jsonData = $data->jsonData;
$filename = $data->filename;


// Utiliser les variables comme vous le souhaitez
// Par exemple, écrire les données JSON dans un fichier avec le nom de fichier spécifié
$file = $filename . '.json';
file_put_contents($file, $jsonData);

// Répondre avec un message de réussite
$response = "JSON data saved successfully with filename: " . $filename;
echo $response;
?>
