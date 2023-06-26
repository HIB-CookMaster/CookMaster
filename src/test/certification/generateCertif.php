<?php
    // Vos variables
    $prenom = $_POST['firstName'];
    $nom = $_POST['lastName'];
    $nomDuCertificat = $_POST['certifName'];
    $dateObtention = date("d-m-Y");

    // Chargez votre image de certificat
    $image = imagecreatefrompng('../../../assets/images/graduate/certifTemplate.png');

    // Choisissez la couleur du texte
    $colorName = imagecolorallocate($image, 190, 154, 69);

    // color : grey
    $color = imagecolorallocate($image, 128, 128, 128);

    // Définissez le chemin vers votre police
    $font_path_name = '../../../assets/images/graduate/BRUSHSCI.ttf';
    $font_text = '../../../assets/images/graduate/RobotoCondensed-Regular.ttf';

    // Ajoutez le texte à votre image

    // Première ligne de texte (nom et prénom)
    $text = $prenom . ' ' . $nom;
    $fontSize = 32;

    // Obtenez la boîte englobante du texte
    $bbox = imagettfbbox($fontSize, 0, $font_path_name, $text);

    // Calculez la position pour centrer le texte
    $xName = (imagesx($image) - ($bbox[2] - $bbox[0])) / 2;
    $yName = 280;

    // Rendre le texte sur l'image
    imagettftext($image, $fontSize, 0, $xName, $yName, $colorName, $font_path_name, $text);

    // Deuxième ligne de texte (nom du certificat)
    $fontSize = 12;
    $bbox = imagettfbbox($fontSize, 0, $font_text, $nomDuCertificat);
    $xCertif = (imagesx($image) - ($bbox[2] - $bbox[0])) / 2;
    $yCertif = 370;

    // Rendre le texte sur l'image
    imagettftext($image, $fontSize, 0, $xCertif, $yCertif, $color, $font_text , $nomDuCertificat);

    // Troisième ligne de texte (date d'obtention)
    imagettftext($image, 12, 0, 520, 435, $color, $font_text , $dateObtention);

    // Indique au navigateur qu'il s'agit d'un fichier à télécharger
    header('Content-Description: File Transfer');

    // Indique au navigateur le type de fichier
    header('Content-Type: image/png');

    // Suggère un nom de fichier au navigateur
    header('Content-Disposition: attachment; filename=certificat.png');

    // Indique que le fichier doit être téléchargé plutôt qu'affiché
    header('Content-Transfer-Encoding: binary');

    // Indique au navigateur de ne pas mettre en cache les résultats
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');

    // Affiche l'image directement dans le navigateur
    imagepng($image);

    // Libérez la mémoire
    imagedestroy($image);
?>
