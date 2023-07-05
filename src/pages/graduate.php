<?php require "../required_pages/header.php"; ?>
<?php require "../required_pages/navbar.php"; ?>

<div class="bg-cart bg-filter" style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 250px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100 mt-5">
            <span style="color: white;" class="fs-2">Graduate formation </span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light" href="/CookMaster/">Home</a> | <span class="text-success"> Graduate formation</span></span>
        </div>
    </div>
</div>


<style>
    .card-box {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px !important;
        transition: ease-in-out 0.3s !important;
    }

    .card-box:hover {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px !important;
        transition: ease-in-out 0.3s !important;
    }

    .text-low-green {
        color: #178E99 !important;
    }
</style>

<div class="container mt-5">
    <?php


    $folderPath = "../cert/";

    // Récupère tous les dossiers dans le chemin spécifié
    $folders = glob($folderPath . '*', GLOB_ONLYDIR);

    $jsonFiles = array();

    foreach ($folders as $folder) {
        // Récupère tous les fichiers .json dans le dossier actuel
        $filesInFolder = glob($folder . '/*.json');
        foreach ($filesInFolder as $file) {
            $jsonFiles[] = $file;
        }
    }


    foreach ($jsonFiles as $file) {
        $content = file_get_contents($file);
        $json = json_decode($content);
    ?>
        <div class="card mb-3 shadow-0 border-0 card-box pointer" onclick="window.location.href='./learn.php?certifName=<?php echo $json->infos->certifName . "&chap=0" ?>'">
            <div class="row g-0">
                <div class="col-md-4 p-3">
                    <img src="<?php echo $newStr = str_replace("../../", "../", $json->infos->thumbnail); ?>" alt="" class="img-fluid h-100 object-fit-cover" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-low-green fw-regular">Cooking lessons - <?php echo $json->infos->certifName; ?></h5>
                        <h4 class=""><?php echo $json->infos->certifName; ?></h4>
                        <div class="d-flex">
                            <div class="">
                                <i class="fa-solid fa-signal"></i>
                                <span class="opacity-75 ms-2"><?php echo ucfirst($json->infos->difficulty); ?></span>
                            </div>
                            <div class="">
                                <i class="fa-regular fa-clock ms-4"></i>
                                <span class="opacity-75 mx-2"><?php echo $json->infos->duration . " hours"; ?></span>
                            </div>
                            <div>
                                <i class="fa-solid fa-medal ms-4"></i>
                            </div>
                        </div>
                        <p class="mt-3"><?php echo $json->infos->description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</div>
<br><br><br><br><br>
<?php require "../required_pages/footer.php"; ?>