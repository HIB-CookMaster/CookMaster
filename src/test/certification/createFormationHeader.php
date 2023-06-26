<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $thumbnail = $_POST['thumbnail'];
    $difficulty = $_POST['difficulty'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];
    $certifName = $_POST['certifName'];

    // Sauvegarde des données dans un tableau
    $formationData = [
        'thumbnail' => $thumbnail,
        'difficulty' => $difficulty,
        'duration' => $duration,
        'description' => $description,
        'certifName' => $certifName
    ];

    // Encode les données en JSON
    $formationDataJson = json_encode($formationData);

    // Stocke les données du formulaire dans un cookie pour une durée de 1 jour
    setcookie('formationHeader', $formationDataJson, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>

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

<div id="container" class="container mt-5">
    <div id="infos" class="card-shadow p-5">
        <span class="fs-4 opacity-75">Create a new formation</span>
        <form action="./createFormationContent.php" method="POST">
            <div class="row mt-4">
                <div class="col-lg-6">
                    <label class="form-label opacity-75" for="thumbnail">Add a thumbnail</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" required />
                    <label class="form-label opacity-75 mt-3" for="difficulty">Select difficulty</label>
                    <select class="form-select" id="difficulty" aria-label="Default select example" required>

                        <option selected></option>
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="advanced">Advanced</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label class="form-label opacity-75" for="duration">Formation duration (in hours)</label>
                    <input type="time" class="form-control" id="duration" required />

                    <label class="form-label opacity-75 mt-3" for="description">Short description</label>
                    <input type="text" class="form-control" id="description" required />
                </div>

                <div class="mt-4">
                    <label class="form-label opacity-75" for="certifName">Formation name</label>
                    <input type="text" id="certifName" name="certifName" class="form-control" required />
                </div>
            </div>
            <!-- Save form in cookie session -->
            <button id="saveBtn" type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
    <br>
</div>

<br><br><br><br><br>

<?php require "../../required_pages/footer.php"; ?>