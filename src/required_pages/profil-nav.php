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
                $css = "list-group-item list-group-item-action py-1 px-3 border-0 bg-success bg-opacity-25 rounded-3 mt-2 fw-medium fs-6";
        } else {
                $css = "list-group-item list-group-item-action py-1 px-3 border-0 mt-2 grey opacity-25 fs-6";
        }
        return $css;
}


?>


<div class="col-lg-1 col-md-2 col-sm-2 border-end border-secondary-subtle pe-4 d-flex justify-content-center nav-cont">

    <div class="list-group list-group-light text-center nav-profil">
        <a href="./" class="<?php echo cssApply("profil", $nom_page) ?>"><i
                class="fa-regular fa-user fa-lg"></i></a>
        <a href="./messages.php"
            class="<?php echo cssApply("messages.php", $nom_page) ?>"><i
                class="fa-regular fa-message fa-lg"></i></a>
        <a href="#" class="list-group-item list-group-item-action py-1 px-3 border-0 mt-2 grey opacity-25 fs-6"><i
                class="fa-solid fa-utensils fa-lg"></i></a>
        <a href="#" class="list-group-item list-group-item-action py-1 px-3 border-0 mt-2 grey opacity-25 fs-6"><i
                class="fa-regular fa-gem fa-lg"></i></a>
        <a href="#" class="list-group-item list-group-item-action py-1 px-3 border-0 mt-2 grey opacity-25 fs-6"><i
                class="fa-solid fa-shield-halved fa-lg"></i></a>
        <a href="#" class="list-group-item list-group-item-action py-1 px-3 border-0 mt-2 grey opacity-25  fs-6"><i
                class="fa-regular fa-clock-rotate-left fa-lg"></i></a>
    </div>
</div>