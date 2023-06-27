<?php
// Récupérer les données JSON envoyées
$jsonData = json_decode($_POST['jsonData']);
$infos = json_decode($_POST['infos']);

// Récupérer les variables
if (!empty($infos->certifName)) {
    $filename = str_replace(' ', '_', $infos->certifName); // replace spaces with underscores
    // lowerCase $filename
    $filename = strtolower($filename);
} else {
    $filename = "default"; // si le nom est vide, utilisez un nom de fichier par défaut
}

// Define the upload directory path
$uploadDir = './' . $filename . '/';

// Create the upload directory with the certificate's name if it does not exist
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Handle thumbnail separately
if (isset($_FILES['thumbnail'])) {
    $thumbnailFile = $_FILES['thumbnail'];

    // Check for errors
    if ($thumbnailFile['error'] === UPLOAD_ERR_OK) {
        $fileName = str_replace(' ', '_', basename($thumbnailFile['name'])); // replace spaces with underscores
        $uploadFile = $uploadDir . $fileName;

        // Check if file already exists
        if (move_uploaded_file($thumbnailFile['tmp_name'], $uploadFile)) {
            echo "File " . $fileName . " was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
    } else {
        echo "File upload error: " . $thumbnailFile['error'];
    }

    // Directly replace the thumbnail path
    $infos->thumbnail = $uploadFile; 
}

// Handle uploaded files
$uploadedFilePaths = []; // Initialize array to store uploaded file paths

// Loop through each file in files[] array (excluding the thumbnail)
foreach ($_FILES as $fileKey => $fileArray) {
    if ($fileKey !== 'thumbnail') {
        // Check for errors
        if ($fileArray['error'] === UPLOAD_ERR_OK) {
            $fileName = str_replace(' ', '_', basename($fileArray['name'])); // replace spaces with underscores
            $uploadFile = $uploadDir . $fileName;

            // Check if file already exists
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
}

// Ajoutez l'objet infos au JSON
$jsonDataWithInfos = array(
    "infos" => $infos,
    "data" => [$jsonData]
);

// Replace blob URLs in the JSON data with uploaded file paths
foreach ($jsonDataWithInfos["data"][0] as $chapterKey => $chapter) {
    foreach ($chapter->data as $contentKey => $content) {
        if (($content->class === "img" || $content->class === "video") && strpos($content->content, "blob:") === 0) {
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

$file = $uploadDir . $filename . '.json';
file_put_contents($file, $jsonDataWithInfosString);

// Répondre avec un message de réussite
$response = "JSON data and infos saved successfully with filename: " . $filename;
echo $response;
