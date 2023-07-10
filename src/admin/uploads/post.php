<?php

$selected = $_POST['selections'];

$file = $_FILES['file'];

if ($file['error'] == 0) {
    if (strpos($file['type'], 'image') !== false) {
        $type = 'images';
    } elseif (strpos($file['type'], 'video') !== false) {
        $type = 'videos';
    } else {
        header("Location: /CookMaster/src/admin/uploads/uploads.php?success=3");
        die("Le fichier doit être une image ou une vidéo");
    }

    $path = "../../../assets/$type/$selected/";

    if (!move_uploaded_file($file['tmp_name'], $path . $file['name'])) {
        header("Location: /CookMaster/src/admin/uploads/uploads.php?success=2");
        die("Erreur lors du déplacement du fichier.");
    }
} else {
    die("Aucun fichier téléchargé.");
}

header("Location: /CookMaster/src/admin/uploads/uploads.php?success=1");
