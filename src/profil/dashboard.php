<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>
<?php require_once "./header.php" ?>
<?php require_once "../helpers/getnamefromemail.php" ?>



<?php

if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: /CookMaster");
}

$first_name = isset($_SESSION['email']) ? getFirstNameFromEmail($_SESSION['email']) : "null";

?>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-5">
            <?php require_once "./nav.php" ?>
        </div>
        <div class="col-lg-8 mt-5">
            <div class="bg-cream p-3 mt-3">
                <span class="opacity-75">Hello <?php echo $first_name." (Not ".$first_name ?>  ? <a href="#" class="">Log out</a> )</span>
            </div>
            <div class="bg-cream p-3 mt-3">
                <span class="opacity-75">From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</span>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>



<?php require_once "../required_pages/footer.php" ?>