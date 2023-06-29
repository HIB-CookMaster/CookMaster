<?php require "../../required_pages/header.php"; ?>
<?php require "../../required_pages/navbar.php"; ?>

<div class="bg-cart bg-filter"
    style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 300px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100">
            <span style="color: white;" class="fs-2">Test </span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light"
                    href="/CookMaster/">Home</a> | <span class="text-success"> Test</span></span>
        </div>
    </div>
</div>

<?php require_once "../nav.php"; ?>

<div class="container mt-5">
    <form class="form d-flex flex-column" action="./generateCertif.php" method="post">
        <label for="firstName" class="mt-3">First Name</label>
        <input type="text" name="firstName" id="firstName">

        <label for="lastName" class="mt-3">Last Name</label>
        <input type="text" name="lastName" id="lastName">

        <label for="certifName" class="mt-3">Certification name</label>
        <input type="text" name="certifName" id="certifName">

        <button type="submit" class="btn btn-primary mt-3">Send data</button>
    </form>
</div>

<br><br><br><br><br><br>





<?php require "../../required_pages/footer.php"; ?>