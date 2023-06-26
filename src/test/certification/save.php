<?php
// Récupérer les données JSON envoyées
$jsonData = json_decode($_POST['jsonData']);
$infos = json_decode($_POST['infos']);

// Récupérer les variables
if (!empty($infos->certifName)) {
    $filename = str_replace(' ', '_', $infos->certifName); // replace spaces with underscores
} else {
    $filename = "default"; // si le nom est vide, utilisez un nom de fichier par défaut
}

// Ajoutez l'objet infos au JSON
$jsonDataWithInfos = array(
    "infos" => $infos,
    "data" => [$jsonData]
);

// Define the upload directory path
$uploadDir = './' . $filename . '/';

// Create the upload directory with the certificate's name if it does not exist
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Handle uploaded files
$uploadedFilePaths = []; // Initialize array to store uploaded file paths

foreach ($_FILES as $fileKey => $fileArray) {
    if ($fileArray['error'] === UPLOAD_ERR_OK) {
        $fileName = str_replace(' ', '_', basename($fileArray['name'])); // replace spaces with underscores
        $uploadFile = $uploadDir . $fileName;

        if (move_uploaded_file($fileArray['tmp_name'], $uploadFile)) {
            // Store the file path
            $uploadedFilePaths[] = $uploadFile;
            echo "File " . $fileName . " was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
    } else {
        echo "File upload error: " . $fileArray['error'];
    }
}

// Replace blob URLs in the JSON data with uploaded file paths
foreach ($jsonDataWithInfos["data"][0] as $chapterKey => $chapter) {
    foreach ($chapter->data as $contentKey => $content) {
        if ($content->class === "img" && strpos($content->content, "blob:") === 0) {
            // Check if there is a corresponding uploaded file path
            if (count($uploadedFilePaths) > 0) {
                // Replace the blob URL with the uploaded file path
                $content->content = array_shift($uploadedFilePaths);
            } else {
                echo "No uploaded file path for " . $content->content;
            }
        }
    }
}

// Convertir le tableau PHP en une chaîne JSON
$jsonDataWithInfosString = json_encode($jsonDataWithInfos);

// Utiliser les variables comme vous le souhaitez
// Par exemple, écrire les données JSON dans un fichier avec le nom de fichier spécifié
$file = $uploadDir . $filename . '.json';
file_put_contents($file, $jsonDataWithInfosString);

// Répondre avec un message de réussite
$response = "JSON data and infos saved successfully with filename: " . $filename;
echo $response;
