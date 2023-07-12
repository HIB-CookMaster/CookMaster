<?php


// Gets all the json from this folder
$files = glob('*.json');

$json = [];

if(!isset($_GET['id'])) {
    // Reads all and put in one array
    foreach($files as $file) {
        $json[] = json_decode(file_get_contents($file), true);
    }

    // Returns the array
    echo json_encode($json);
    die();
}

foreach($files as $file) {
    $data = json_decode(file_get_contents($file), true);
    if($data['id'] == $_GET['id']) {
        echo json_encode($data);
        die();
    }
}

echo json_encode([]);

?>