<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>
<?php require_once "./header.php" ?>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-5">
            <?php require_once "./nav.php" ?>
        </div>
        <div class="col-lg-8 mt-5">
            <!-- Starter plan -->
            <div class="bg-cream p-3 mt-3 text-center ">
                <span class="opacity-75 text-center">You have the Starter subscription. <br> Thank you !</span>
                <img class="d-block mx-auto mt-3" src="../../assets/images/starter.png" alt="">
            </div>

            <!-- Master plan -->
            <div class="bg-cream p-3 mt-3 text-center ">
                <span class="opacity-75 text-center">You have the Master subscription. <br> Thank you !</span>
                <img class="d-block mx-auto mt-3" src="../../assets/images/master.png" alt="">
            </div>
            <div class="bg-cream p-3 mt-3">
                <span class="opacity-75">Your subscription will end in 21 days, want to change/renew your plan ? Click <a href="../pages/subscription.php">here</a> </span>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>

<?php require_once "../required_pages/footer.php" ?>