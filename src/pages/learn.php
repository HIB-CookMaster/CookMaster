<?php

use function PHPSTORM_META\type;

require "../required_pages/header.php"; 
require "../required_pages/navbar.php"; 

require_once "../helpers/dbhelper.php";

$con = getDatabaseConnection();

$query = $con->prepare("SELECT id FROM USERS WHERE email = :email");
$query->execute([":email" =>  $_SESSION['email']]);
$result = $query->fetch(PDO::FETCH_ASSOC);
$id = (int) $result['id'];



?>

<style>
    .custom-btn {
        background: #ECECEC;
        outline: none !important;
        border: 0 !important;
        border-right: 2px solid #D9D9D9 !important;
        border-bottom: 4px solid #B1B1B1 !important;
    }

    .custom-btn:hover {
        background: #c9c9c9 !important;
    }

    .bg-info {
        background-color: #3FA5DB !important;
    }

    .bg-info-content {
        background-color: #E6F4FA !important;
    }

    .bg-warning-content {
        background-color: #FDEFE1 !important;
    }

    .bg-warning {
        background-color: #F39539 !important;
    }

    .bg-important-content {
        background-color: #f58491 !important;
    }

    .bg-important {
        background-color: #f23047 !important;
    }

    .z-ind-top {
        z-index: 1000 !important;
    }
</style>

<?php

$certifName = $_GET['certifName']; // Récupère le nom du certificat passé via l'URL
$chap = $_GET['chap']; // Récupère le numéro du chapitre passé via l'URL
$folderPath = "../cert/";

// Récupère tous les dossiers dans le chemin spécifié
$folders = glob($folderPath . '*', GLOB_ONLYDIR);

$jsonFile = null;

foreach ($folders as $folder) {
    // Récupère tous les fichiers .json dans le dossier actuel
    $filesInFolder = glob($folder . '/*.json');
    foreach ($filesInFolder as $file) {
        $content = file_get_contents($file);
        $json = json_decode($content);
        // Si le certifName du fichier JSON correspond à celui passé via l'URL, on garde ce fichier
        if ($json->infos->certifName === $certifName) {
            $jsonFile = $file;
            break;
        }
    }
    // Si on a déjà trouvé le bon fichier, on sort de la boucle
    if ($jsonFile !== null) {
        break;
    }
}

// Maintenant, $jsonFile contient le chemin vers le fichier JSON correspondant au certifName passé via l'URL, ou null si aucun fichier correspondant n'a été trouvé
if ($jsonFile !== null) {
    $content = file_get_contents($jsonFile);
    $json = json_decode($content);
}
?>

<div class="bg-cart bg-filter" style="background-color: #F6F4FD; height: 200px; background-size: cover; background-position: 0% 20%">
    <div class="d-flex container pt-3">
        <span class="me-1 opacity-75 pointer" onclick="window.location.href='/CookMaster'">Home</span>
        <span class="mx-1">></span>
        <span class="mx-1 opacity-75 pointer" onclick="window.location.href='/CookMaster/src/pages/graduate.php'">Professional training</span>
        <span class="mx-1">></span>
        <span class="mx-1 opacity-50"><?php echo $json->infos->certifName ?></span>
    </div>
    <div class="container d-flex w-100 mt-5">
        <div class="d-flex justify-content-between h-100 w-100">
            <span class="fs-2 text-dark"><?php echo $json->infos->certifName ?></span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-dark" href="/CookMaster/">Home</a> <span class="text-dark">|</span> <span class="text-success"> Graduate formation</span></span>
        </div>
    </div>
    <div class="container">
        <div class="d-flex mt-4">
            <div class="">
                <i class="fa-regular fa-clock "></i>
                <span class="opacity-75 ms-2"><?php echo $json->infos->duration ?></span>

            </div>
            <div class="">
                <i class="fa-solid fa-signal ms-4"></i>
                <span class="opacity-75 mx-2"><?php echo ucfirst($json->infos->difficulty) ?></span>
            </div>
            <div>
                <i class="fa-solid fa-medal ms-4"></i>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- This part will remain fixed on top when scrolling -->
    <div class="btn-group w-100 mt-5 position-sticky top-0 z-ind-top" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary bg-dark rounded-0 outline-0 border-0" onclick="window.location.href='/CookMaster'"><i class="fa-solid fa-house"></i></button>
        <?php for ($i = 0; $i < sizeof($json->data[0]); $i++) {
            if ($i == $chap) { ?>
                <button type="button" class="btn btn-primary rounded-0 custom-btn active" onclick="window.location.href='./learn.php?certifName=<?php echo $json->infos->certifName . "&chap=" . $i ?>'"></button>

            <?php } else {
            ?>
                <button type="button" class="btn btn-primary rounded-0 custom-btn" onclick="window.location.href='./learn.php?certifName=<?php echo $json->infos->certifName . "&chap=" . $i ?>'"></button>
        <?php }
        } ?>
        <button type="button" class="btn btn-primary bg-dark outline-0 border-0"><i class="fa-solid fa-trophy text-warning"></i></button>
    </div>
    <?php if ($json->data[0][(int) $chap]->data[0]->class == "quizz") { ?>
        <div class="mt-5">
            <span class="position-relative p-3 bg-info-content rounded-3 d-block mt-3 opacity-75">
                Tips : You can take the test only once a day, so becareful when answering. If all the answers are correct, you will receive a certificate of completion.
                <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-info">
                    <i class="fa-solid fa-info fa-lg"></i>
                </span>
            </span>
        </div>
    <?php } ?>

    <div class="row">
        <div class="col-lg-10">
            <div class="d-flex justify-content-center flex-column mt-3 p-5">
                <?php //var_dump($json->data[0][0]->data[0]); 
                ?>
                <?php $newStr = str_replace("../../", "../", $json->infos->thumbnail); ?>

                <?php for ($i = 0; $i < sizeof($json->data[0][(int) $chap]->data); $i++) { ?>

                    <?php if ($json->data[0][(int) $chap]->data[$i]->class == "img") { ?>
                        <?php
                        $filePath = $json->data[0][(int) $chap]->data[$i]->content;
                        $newStr = str_replace("../../", "../", $filePath);
                        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp'];
                        $videoExtensions = ['mp4', 'avi', 'mov', 'flv', 'wmv', 'mkv', 'webm', 'm4v'];
                        if (in_array($fileExtension, $imageExtensions)) { ?>
                            <div class="rounded-5 p-5 d-block mx-auto">
                                <img class="img-fluid rounded-4 w-auto" src="<?php echo $newStr ?>" alt="">
                            </div>
                        <?php
                        } elseif (in_array($fileExtension, $videoExtensions)) { ?>
                            <video controls class="embed-responsive-item w-100 card-shadow mb-3">
                                <source src="<?php echo $newStr ?>" type="video/mp4">
                            </video>
                    <?php
                        }
                    } ?>

                    <?php if ($json->data[0][(int) $chap]->data[$i]->class == "textArea") { ?>
                        <p class="opacity-75 mt-3 description"><?php echo $json->data[0][(int) $chap]->data[$i]->content ?></p>
                    <?php } ?>

                    <?php if ($json->data[0][(int) $chap]->data[$i]->class == "title") { ?>
                        <h2 class="opacity-75 mt-2 title"><?php echo $json->data[0][(int) $chap]->data[$i]->content ?></h2>
                    <?php } ?>

                    <?php if ($json->data[0][(int) $chap]->data[$i]->class == "subTitle") { ?>
                        <h4 class="opacity-75 title"><?php echo $json->data[0][(int) $chap]->data[$i]->content ?></h4>
                    <?php } ?>

                    <?php if ($json->data[0][(int) $chap]->data[$i]->class == "tips") { ?>
                        <span class="position-relative p-3 bg-info-content rounded-3 d-block mt-3 opacity-75">
                            Tips : <?php echo $json->data[0][(int) $chap]->data[$i]->content ?>
                            <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-info">
                                <i class="fa-solid fa-info fa-lg"></i>
                            </span>
                        </span>
                    <?php } ?>

                    <?php if ($json->data[0][(int) $chap]->data[$i]->class == "warning") { ?>
                        <span class="position-relative p-3 bg-warning-content rounded-3 d-block mt-3 opacity-75">
                            Warning : <?php echo $json->data[0][(int) $chap]->data[$i]->content ?>
                            <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-warning">
                                <i class="fa-solid fa-info fa-lg"></i>
                            </span>
                        </span>
                    <?php } ?>

                    <?php if ($json->data[0][(int) $chap]->data[$i]->class == "important") { ?>
                        <span class="position-relative p-3 bg-important-content rounded-3 d-block mt-3 opacity-75 text-light">
                            Important : <?php echo $json->data[0][(int) $chap]->data[$i]->content ?>
                            <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-important">
                                <i class="fa-solid fa-info fa-lg"></i>
                            </span>
                        </span>
                    <?php } ?>
                    <?php if ($json->data[0][(int) $chap]->data[$i]->class == "quizz") { ?>
                        <h4 class="opacity-75 title"><?php echo $json->data[0][(int) $chap]->data[$i]->question;
                                                        $i++ ?></h4>
                        <ul class="quizz list-unstyled">
                            <?php foreach ($json->data[0][(int) $chap]->data[$i]->answers as $answer) { ?>
                                <li class="quizz-answer">
                                    <label>
                                    <?php echo $answer->correct ?>
                                        <input type="radio" name="question<?php echo $i; ?>" data-answer="<?php echo $answer->correct ? 1 : 0 ?>" value="<?php echo $answer->answer ?>">
                                        <?php echo $answer->answer ?>
                                    </label>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                <?php } ?>

                <div class="mt-3">
                    <button type="btn" class="btn btn-primary" id="submitBtn">Submit Answers</button>
                </div>
            </div>

        </div>
        <div class="col-lg-2 mt-2">
            <div class="d-flex justify-content-center flex-column p-4 card-shadow mt-5">
                <span class="text-center opacity-75">Created by</span>
                <img class="img-fluid w-50 h-auto d-block mx-auto mt-2" src="/CookMaster/assets/images/logo_squarre.png" alt="">
                <span class="text-center opacity-50 mt-3">Foodieland, cooking e-learning platform</span>
            </div>
        </div>
    </div>
</div>

<?php 

$certName = $json->infos->certifName;
//Replace " " by "_" and remove uppercase
$certName = str_replace(" ", "_", $certName);
$certName = strtolower($certName);


?>

<script>
    document.getElementById('submitBtn').addEventListener('click', function() {
        let unanswered = false;
        let allCorrect = true;

        let quizzes = document.querySelectorAll('.quizz');
        quizzes.forEach(function(quizz) {
            // Vérifie si une réponse a été choisie
            let checked = quizz.querySelector('input[type="radio"]:checked');
            if (!checked) {
                unanswered = true;
                return;
            }

            // Vérifie si la réponse est correcte
            let isCorrect = checked.dataset.answer === "1";
            if (!isCorrect) {
                allCorrect = false;
                return;
            }
        });

        if (unanswered) {
            alert('Veuillez répondre à toutes les questions.');
        } else if (allCorrect) {
            // redirection to ./quizzSuccess
            window.location.href = './quizzSuccess.php?certif_name=<?php echo $json->infos->certifName ?>&id_user=<?php echo $id ?>';
        } else {
            alert('Certaines réponses sont incorrectes. Veuillez réessayer.');
        }
    });
</script>



<br><br><br><br><br>
<?php require "../required_pages/footer.php"; ?>