<?php
// Récupérer l'URL de la page courante
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $url = "https://";
else
  $url = "http://";
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Extraire le dernier élément de l'URL
$nom_page = basename(parse_url($url, PHP_URL_PATH));


$css = "";

function cssApply($param, $nom_page) {
        if($param == $nom_page) {
                $css = "list-group-item list-group-item-action py-2 px-3 border-0 bg-success bg-opacity-75 rounded-1 mt-2 fw-medium fs-6 d-flex align-items-center card-shadow text-white mx-1";
        } else {
                $css = "list-group-item list-group-item-action py-2 px-3 border-0 mt-2 grey opacity-25 fs-6 d-flex align-items-center mx-1";
        }
        return $css;
}


?>


<div class="container-fluid p-0">
    <img style="height: 125px" class="img-fluid w-100 object-fit-cover"
        src="/CookMaster/assets/images/profil/banner.png" alt="">
    <div class="container border-bottom mb-3 border-secondary-subtle p-4">
        <div class="row m-0 d-flex">
            <div class="">
                <div class="d-flex justify-content-start">
                    <div class="d-inline-flex position-relative mt-n4">
                        <form action="your_endpoint_here" method="post" enctype="multipart/form-data">
                            <label for="file-input">
                                <i
                                    class="pointer fa-solid fa-camera position-absolute top-70 left-85 translate-middle p-1 bg-success p-2 border border-light rounded-pill text-white border-0 mt-n4"></i>
                                <input type="file" id="file-input" name="uploaded_file" style="display:none;">
                            </label>
                        </form>
                        <img style="max-width:125px; max-height: 125px;"
                            class="rounded-4 shadow-5 rounded-pill border border-5 border-success border-opacity-75 img-fluid mt-n4"
                            src="https://img.freepik.com/vecteurs-premium/personnage-avatar-homme-affaires_24877-18284.jpg?w=2000"
                            alt="Avatar" style="width: 50px; height: 50px;">
                    </div>

                    <div class="w-100">
                        <div class="mt-3 ms-3">
                            <span class="fw-bold fs-5">Mobina Mirbaheri</span>
                        </div>
                        <div class="mt-2 ms-3">
                            <span class="fw-bold fs-6 grey">Your account is ready, you can now apply for advice.</span>

                            <div class="d-flex justify-content-end nav-cont mt-2">

                                <div class="list-group list-group-light text-center nav-profil flex-row">
                                    <a href="./" class="<?php echo cssApply("profil", $nom_page) ?>"><i class="fa-regular fa-user fa-lg"></i><span class="ms-2">Profil</span></a>
                                    <a href="./messages.php" class="<?php echo cssApply("messages.php", $nom_page) ?>"><i class="fa-solid fa-envelope-open-text fa-lg"></i><span class="ms-2">Messages</span></a>
                                    <a href="./messages.php" class="<?php echo cssApply("messages.php", $nom_page) ?>"><i class="fa-solid fa-inbox fa-lg"></i></a>
                                    <a href="./messages.php" class="<?php echo cssApply("messages.php", $nom_page) ?>"><i class="fa-solid fa-inbox fa-lg"></i></a>
                                    <a href="./messages.php" class="<?php echo cssApply("messages.php", $nom_page) ?>"><i class="fa-solid fa-inbox fa-lg"></i></a>
                                    <a href="./messages.php" class="<?php echo cssApply("messages.php", $nom_page) ?>"><i class="fa-solid fa-inbox fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>