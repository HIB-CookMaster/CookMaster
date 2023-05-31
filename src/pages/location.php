<?php require "../required_pages/header.php"; ?>
<?php require "../required_pages/navbar.php"; ?>

<div class="bg-cart bg-filter"
    style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 500px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100">
            <span style="color: white;" class="fs-2">Location </span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light"
                    href="/CookMaster/">Home</a> | <span class="text-success"> Location</span></span>
        </div>
    </div>
</div>

<div class="container">
    <div class="row align-items-start d-flex justify-content-center">
        <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mb-3 mx-4 mb-4">
            <div class="card h-100 border-0 shadow-none">
                <img src="./assets/images/home/recipes/wagyu-beef.webp" class="card-img-top" alt="...">
                <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                    <span class="visually-hidden">New alerts</span>
                </span>
                <div class="card-body w-100 h-100 mt-1">
                    <h5 class="card-title fw-bold">Big and Juicy Wagyu Beef Cheeseburger</h5>
                    <div class="mt-4 d-flex justify-content-between">
                        <span><i class="fa-solid fa-clock me-2"></i><span class="opacity-75">30
                                Minutes</span></span>
                        <span class=""><i class="fa-solid fa-utensils me-2"></i><span
                                class="opacity-75">Snack</span></span>
                        <span class=""><i class="fa-regular fa-star-half-stroke text-warning"><span
                                    class="grey opacity-75 fs-little fw-bold">4.7</span></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "../required_pages/footer.php"; ?>