<?php
if(isset($_POST['file'])) {
    $file = $_POST['file'];

    if(file_exists($file)) {
        unlink($file);
        echo 'File successfully deleted!';
    } else {
        echo 'File does not exist!';
    }
} else {
    echo 'No file specified!';
}

header("Location: list.php")
?>
