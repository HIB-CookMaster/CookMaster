<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>
<?php require_once "./header.php" ?>

<?php

require_once "../helpers/dbhelper.php";

$con = getDatabaseConnection();

$statement = $con->prepare("SELECT id FROM USERS WHERE email = :email");
$statement->execute([
    ":email" => $_SESSION["email"]
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
$id = (int) $user["id"];

$statement = $con->prepare("SELECT id_subscription, date_debut FROM subscription WHERE id_user = :id");
$statement->execute([
    ":id" => $id
]);
$subscription = $statement->fetch(PDO::FETCH_ASSOC);
$id_subscription = (int) $subscription["id_subscription"];

$date_debut = $subscription["date_debut"];
$today = date("Y-m-d");
$today = strtotime($today);
$date_debut = strtotime($date_debut);
$diff = $today - $date_debut;
$days = floor($diff / (60 * 60 * 24));
$days_left = 30 - $days;

if($days_left < 0) {
    $statement = $con->prepare("DELETE FROM subscription WHERE id_user = :id");
    $statement->execute([
        ":id" => $id
    ]);
    $id_subscription = 0;
}

?>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-5">
            <?php require_once "./nav.php" ?>
        </div>
        <div class="col-lg-8 mt-5">
            <!-- Starter plan -->
            <?php if($id_subscription == 1) { ?>
                <div class="bg-cream p-3 mt-3 text-center ">
                    <span class="opacity-75 text-center">You have the Starter subscription. <br> Thank you !</span>
                    <img class="d-block mx-auto mt-3" src="../../assets/images/starter.png" alt="">
                </div>

                <div class="bg-cream p-3 mt-3">
                    <span class="opacity-75">Your subscription will end in <?php echo $days_left ?> days, want to change your plan ? Click <a href="../pages/subscription.php">here</a> </span>
                </div>

            <?php } ?>

            <!-- Master plan -->
            <?php if($id_subscription == 2) { ?>
                <div class="bg-cream p-3 mt-3 text-center ">
                    <span class="opacity-75 text-center">You have the Master subscription. <br> Thank you !</span>
                    <img class="d-block mx-auto mt-3" src="../../assets/images/master.png" alt="">
                </div>

                <div class="bg-cream p-3 mt-3">
                    <span class="opacity-75">Your subscription will end in <?php echo $days_left ?> days, want to change your plan ? Click <a href="../pages/subscription.php">here</a> </span>
                </div>
            <?php } ?>

            <?php if($id_subscription != 1 && $id_subscription != 2) { ?>
                <div class="bg-cream p-3 mt-3">
                    <span class="opacity-75">You are not subscribed. Want to take a look at our plan ? Click <a href="../pages/subscription.php">here</a> </span>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<br><br><br><br><br>

<?php require_once "../required_pages/footer.php" ?>