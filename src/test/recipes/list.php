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

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-9 col-sm-6 mt-3 mb-3">
            <span class="fs-3 opacity-75">All Recipes</span>
        </div>
        <div class="col-lg-3 col-sm-6 mt-3 mb-3">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mb-3 mx-4 mb-4">
            <div class="card h-100 border-0 shadow-none">
                <img src="/CookMaster/assets/images/home/recipes/wagyu-beef.webp" class="card-img-top" alt="...">
                <div class="card-body w-100 h-100 mt-1">
                    <h5 class="card-title fw-bold">Big and Juicy Wagyu Beef Cheeseburger</h5>
                    <div class="mt-2 d-flex justify-content-between">
                        <span><i class="fa-solid fa-person me-2"></i><span class="opacity-75">John Doe,
                                05/06/2023</span></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class=""><i class="fa-solid fa-utensils me-2"></i><span class="opacity-75">Type of recipe
                                : Chicken</span></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class=""><i class="fa-solid fa-stopwatch me-2"></i><span class="opacity-75">Prep Time : 15
                                min</span></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class=""><i class="fa-solid fa-fire-burner me-2"></i><span class="opacity-75">Cook Time :
                                50 min</span></span>
                    </div>

                    <div class="d-flex align-items-center justify-content-center mt-4">
                    <button type="button" class="btn btn-primary" onclick="location.href='./edit.php';"><i class="fa-solid fa-hammer me-3"></i>Edit Recipe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "../../required_pages/footer.php"; ?>