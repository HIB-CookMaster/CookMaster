<?php

    //Display errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $prenom = $_GET['firstName'];
    $nom = $_GET['lastName'];
    $nomDuCertificat = $_GET['certifName'];
    $dateObtention = date("d-m-Y");

    $image = imagecreatefrompng('../../../assets/images/graduate/certifTemplate.png');
    $colorName = imagecolorallocate($image, 190, 154, 69);
    $color = imagecolorallocate($image, 128, 128, 128);

    $font_path_name = '../../../assets/images/graduate/BRUSHSCI.ttf';
    $font_text = '../../../assets/images/graduate/RobotoCondensed-Regular.ttf';
    $text = $prenom . ' ' . $nom;
    $fontSize = 32;

    $bbox = imagettfbbox($fontSize, 0, $font_path_name, $text);
    $xName = (imagesx($image) - ($bbox[2] - $bbox[0])) / 2;
    $yName = 280;
    imagettftext($image, $fontSize, 0, $xName, $yName, $colorName, $font_path_name, $text);
    $fontSize = 12;
    $bbox = imagettfbbox($fontSize, 0, $font_text, $nomDuCertificat);
    $xCertif = (imagesx($image) - ($bbox[2] - $bbox[0])) / 2;
    $yCertif = 370;
    imagettftext($image, $fontSize, 0, $xCertif, $yCertif, $color, $font_text , $nomDuCertificat);
    imagettftext($image, 12, 0, 520, 435, $color, $font_text , $dateObtention);
    header('Content-Description: File Transfer');
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename=certificat.png');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    imagepng($image);
    imagedestroy($image);

    header('Location: ./closeWindows.php');
?>
