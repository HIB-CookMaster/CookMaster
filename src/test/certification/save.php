<?php
// Récupérer les données JSON envoyées
$jsonData = json_decode($_POST['jsonData']);
$infos = json_decode($_POST['infos']);

// Récupérer les variables
if (!empty($infos->certifName)) {
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

// Define the upload directory path
$uploadDir = './' . $filename . '/';

// Create the upload directory with the certificate's name if it does not exist
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Utiliser les variables comme vous le souhaitez
// Par exemple, écrire les données JSON dans un fichier avec le nom de fichier spécifié
$file = $uploadDir . $filename . '.json';
file_put_contents($file, $jsonDataWithInfosString);

// Handle uploaded files
foreach ($_FILES as $fileKey => $fileArray) {
    if ($fileArray['error'] === UPLOAD_ERR_OK) {
        $uploadFile = $uploadDir . basename($fileArray['name']);

        if (move_uploaded_file($fileArray['tmp_name'], $uploadFile)) {
            echo "File " . basename($fileArray['name']) . " was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
    } else {
        echo "File upload error: " . $fileArray['error'];
    }
}

// Répondre avec un message de réussite
$response = "JSON data and infos saved successfully with filename: " . $filename;
echo $response;
