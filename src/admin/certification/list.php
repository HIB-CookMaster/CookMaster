<?php if (isset($_POST['deleteFolder'])) {
    $folderPath = realpath($_POST['folderPath']);

    // Supprimer le dossier et son contenu récursivement
    deleteFolder($folderPath);

    // Redirection vers la page actuelle pour actualiser la liste des dossiers
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit();
}

function deleteFolder($folderPath)
{
    if (!is_dir($folderPath)) {
        return;
    }

    $files = glob($folderPath . '/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        } elseif (is_dir($file)) {
            deleteFolder($file);
        }
    }

    rmdir($folderPath);
}
?>

<?php require "../../required_pages/header.php"; ?>
<?php require "../../required_pages/navbar.php"; ?>

<div class="bg-cart bg-filter" style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 300px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100">
            <span style="color: white;" class="fs-2">Test</span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light" href="/CookMaster/">Home</a> | <span class="text-success">Test</span></span>
        </div>
    </div>
</div>

<?php require_once "../nav.php"; ?>

<div class="container">
    <div class="container mt-5">
        <?php
        $folderPath = "../../cert/";

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
            <div class="card mb-3 shadow-0 border-0 card-box">
                <div class="row g-0 card-shadow">
                    <div class="col-md-4 p-3">
                        <img src="<?php echo $json->infos->thumbnail; ?>" alt="" class="img-fluid h-100 object-fit-cover" />
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
                            <div class="d-flex">
                                <script>
                                    function confirmDelete() {
                                        return confirm("Êtes-vous sûr de vouloir supprimer ce dossier ? Cette action est irréversible.");
                                    }
                                </script>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='../../pages/learn.php?certifName=<?php echo $json->infos->certifName . "&chap=0" ?>'"><i class="fa-solid fa-location-arrow mx-2"></i> Visit</button>
                                <form method="post" action="" onsubmit="return confirmDelete();">
                                    <input type="hidden" name="folderPath" value="<?php echo dirname($file); ?>">
                                    <button type="submit" class="btn btn-danger mx-4" name="deleteFolder"><i class="fa-solid fa-trash mx-2"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<br><br><br><br>

<?php require "../../required_pages/footer.php"; ?>