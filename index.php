<?php require_once "./src/required_pages/header.php" ?>
<?php require_once "./src/required_pages/navbar.php" ?>


<div class="container ">
    <div class="container-fluid">
        <div class="row" style="height: 500px">
            <div class="col-md-12 col-lg-6  bg-image-left bg-cover rounded-start-4">

                <div class="d-flex align-items-start flex-column mb-3" style="height: 500px;">
                    <div class="mb-auto p-2 mt-3 w-100">
                        <span class="bg-light px-3 py-2 rounded-4"><i class="fa-regular fa-bookmark me-2"></i>Hot
                            recipes</span>
                        <span class="bg-success px-3 py-2 rounded-4 text-light ms-2 bg-opacity-75"><i
                                class="fa-solid fa-utensils me-2"></i>Chicken</span>
                        <span class="bg-success px-3 py-2 rounded-4 text-light ms-2 bg-opacity-75"><i
                                class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                        <span class="d-block mt-4 text-white fs-4 rounded-3 shadow-md">Spicy delicious chicken wings</span>
                    </div>
                    <div class="d-flex flex-row w-100">
                        <div class="p-2 d-flex align-items-center">
                            <img style="height: 40px; width: 40px" src="./assets/images/home/banner-avatar.webp"
                                class="rounded-circle" alt="...">
                            <div class="ms-2">
                                <span class="d-block text-light">John Smith</span>
                                <span class="d-block text-secondary-emphasis">15 March 2023</span>
                            </div>
                        </div>
                        <div class="p-2  d-flex align-items-center ms-auto text-light">
                            <button type="button" class="btn btn-dark bg-dark px-5 py-2 bg-opacity-75 rounded-4 shadow-sm">View Recipes <i class="fa-solid fa-circle-play ms-1"></i></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 bg-image-right bg-cover rounded-end-4">
            </div>
        </div>
    </div>
</div>


<?php require_once "./src/required_pages/footer.php" ?>