<?php
    // Vos variables
    $prenom = $_POST['firstName'];
    $nom = $_POST['lastName'];
    $nomDuCertificat = $_POST['certifName'];
    $dateObtention = date("d-m-Y");

    var_dump($prenom, $nom, $nomDuCertificat, $dateObtention);

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
    // Les numéros sont les coordonnées x et y où le texte commencera
    // imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);

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

    // Enregistrez l'image dans un fichier
    imagepng($image, './uploads/certificat.png');

    // Libérez la mémoire
    imagedestroy($image);
?>
