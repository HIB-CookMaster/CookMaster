<?php
if (isset($_COOKIE['formationHeader'])) {
    $cookieValue = $_COOKIE['formationHeader'];
    $formationData = json_decode($cookieValue, true);

    // Accédez aux valeurs individuelles
    $thumbnail = $formationData['thumbnail'];
    $difficulty = $formationData['difficulty'];
    $duration = $formationData['duration'];
    $description = $formationData['description'];
    $certifName = $formationData['certifName'];

    // Utilisez les valeurs comme vous le souhaitez
} else {
    // Le cookie n'existe pas ou a expiré
    echo "Cookie 'formationHeader' not found.";
}
?>

<!-- Insérez le reste de votre contenu HTML ici -->


<?php require "../../required_pages/header.php"; ?>
<?php require "../../required_pages/navbar.php"; ?>

<div class="bg-cart bg-filter" style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 300px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100">
            <span style="color: white;" class="fs-2">Test </span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light" href="/CookMaster/">Home</a> | <span class="text-success"> Test</span></span>
        </div>
    </div>
</div>

<?php require_once "../nav.php"; ?>

<style>
    .li-hover:hover {
        background-color: #f8f9fa !important;
    }
</style>


<div class="container mt-3">
    <div class="btn-group w-100 position-sticky container" role="group" aria-label="Basic example">
        <button type="button" class="rounded-0 outline-0 border-0">Chapter Delimiter</button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary bg-dark outline-0 rounded-0 border-0"><i class="fa-solid fa-trophy text-warning"></i></button>
    </div>
</div>




<div class="row mt-3">


    <!-- <li id="titleBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Title <i class="fa-solid fa-plus"></i>
            </li>
            <li id="subTitleBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Subtitle <i class="fa-solid fa-plus"></i>
            </li>
            <li id="textAreaBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Text Area <i class="fa-solid fa-plus"></i>
            </li>
            <li id="imgBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Image <i class="fa-solid fa-plus"></i>
            </li>
            <li id="videoBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Video <i class="fa-solid fa-plus"></i>
            </li>
            <li id="tipsBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Tips <i class="fa-solid fa-plus"></i>
            </li>
            <li id="importantBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Important <i class="fa-solid fa-plus"></i>
            </li>
            <li id="warningBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Warning <i class="fa-solid fa-plus"></i>
            </li>

            <li id="quizzBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                Quizz <i class="fa-solid fa-plus"></i>
            </li> -->
    <div class="col-lg-9 mt-3 p-4">
        <div class="d-flex flex-column" id="main">

        </div>
    </div>
</div>

<script src="./create.js"></script>

<?php require "../../required_pages/footer.php"; ?>