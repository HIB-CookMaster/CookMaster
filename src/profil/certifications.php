<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>
<?php require_once "./header.php" ?>

<?php 
require_once "../helpers/getnamefromemail.php" ;
if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: /CookMaster");
}
?>

<?php
require_once "../helpers/dbhelper.php";

$con = getDatabaseConnection();

$statement = $con->prepare("SELECT id FROM USERS WHERE email = :email");
$statement->execute([
    ":email" => $_SESSION["email"]
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
$id = (int) $user["id"];

$statement = $con->prepare("SELECT * FROM CERTIFICATION WHERE id_user = :id_user");
$statement->execute([
    ":id_user" => $id
]);
$certifications = $statement->fetchAll(PDO::FETCH_ASSOC);

$getLastName = getLastNameFromEmail($_SESSION["email"]);
$getFirstName = getFirstNameFromEmail($_SESSION["email"]);
?>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-5">
            <?php require_once "./nav.php" ?>
        </div>
        <div class="col-lg-8 mt-5">
            <?php 
            foreach ($certifications as $certification) { 
                $json_file_path = "../cert/" . $certification["certif_name"] . "/" . $certification["certif_name"].".json";
                if (file_exists($json_file_path)) {
                    $certif_details = json_decode(file_get_contents($json_file_path), true)["infos"];
                    $thumbnail = str_replace("../../", "../", $certif_details["thumbnail"]);
            ?>
            <div class="card mb-3 card-shadow" style="min-height:150px; max-height:350px">
                <div class="row g-0">
                    <div class="col-md-4 p-3">
                        <img src="<?php echo $thumbnail ?>" alt="" class="img-fluid object-fit-cover" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title text-low-green fw-regular" style="color: #178E99">Cooking lessons - <?= $certif_details["certifName"] ?></h5>
                            <h4 class=""><?= $certif_details["certifName"] ?></h4>
                            <div class="d-flex">
                                <div class="">
                                    <i class="fa-solid fa-signal"></i>
                                    <span class="opacity-75 ms-2"><?= $certif_details["difficulty"] ?></span>
                                </div>
                                <div class="">
                                    <i class="fa-regular fa-clock ms-4"></i>
                                    <span class="opacity-75 mx-2"><?= $certif_details["duration"] ?></span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-medal ms-4"></i>
                                </div>
                            </div>
                            <div class="d-flex" style="flex-direction: row-reverse;">
                                <button class="btn btn-primary" onclick="window.open('../admin/certification/generateCertif.php?firstName=<?= $getFirstName ?>&lastName=<?= $getLastName ?>&certifName=<?= $certif_details["certifName"] ?>', '_blank')">Get Certification</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<br><br><br><br><br>

<?php require_once "../required_pages/footer.php" ?>
