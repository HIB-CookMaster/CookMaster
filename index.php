<?php session_start(); ?>

<?php require_once "./src/required_pages/header.php" ?>
<?php require_once "./src/required_pages/navbar.php" ?>


<div class="container mt-5">
    <div class="container-fluid">
        <div class="row" style="height: 500px">
            <div class="col-md-12 col-lg-6 bg-image-left bg-cover rounded-start-4">

                <div class="d-flex align-items-start flex-column mb-3" style="height: 500px;">
                    <div class="mb-auto p-2 mt-3 w-100">
                        <span class="bg-light px-3 py-2 rounded-4"><i class="fa-regular fa-bookmark me-2"></i>Hot
                            recipes</span>
                        <span class="bg-success px-3 py-2 rounded-4 text-light ms-2 bg-opacity-75"><i
                                class="fa-solid fa-utensils me-2"></i>Chicken</span>
                        <span class="bg-success px-3 py-2 rounded-4 text-light ms-2 bg-opacity-75"><i
                                class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                        <span class="d-block mt-4 text-white fs-4 rounded-3 shadow-md">Spicy delicious chicken
                            wings</span>
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
                            <a href="./src/pages/course.php" type="button"
                                class="btn btn-dark bg-dark px-5 py-2 bg-opacity-75 rounded-4 shadow-sm">View Recipes <i
                                    class="fa-solid fa-circle-play ms-1"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 bg-image-right bg-cover rounded-end-4">
            </div>
        </div>
    </div>
    <!-- Simple and testy recipes -->
    <div class="first-section w-100 mt-7">
        <h2 class="fw-bold text-center">Simple and tasty recipes</h2>
        <p class="text-center">With these simple and tasty recipes at your fingertips, cooking will become a joyous adventure. So gather your ingredients, put on your apron, and let your creativity flow. Get ready to savor the flavors and create unforgettable memories in the heart of your kitchen.</p>
    </div>
    <!-- Card section -->
    <div class="container mt-5">
        <div id="recipe-preview" class="row align-items-start d-flex justify-content-center">
            
        </div>
    </div>


    <div class="instagram-section w-100 mt-7">
        <h2 class="fw-bold fs-1 text-center">Check out @cookmaster on Instagram</h2>
        <p class="mt-4 text-center">
            Discover a culinary paradise by checking out the Instagram account @cookmaster. Prepare to be tantalized by a feast for the eyes as you scroll through a collection of mouthwatering dishes and culinary creations. From delectable desserts to savory main courses, @cookmaster has something for every food lover.</p>
    </div>

    <div class="container w-100">
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <img class="img-fluid" src="./assets/images/home/instagram/insta1.webp" alt="">
            </div>
            <div class="col-2">
                <img class="img-fluid" src="./assets/images/home/instagram/insta2.webp" alt="">
            </div>
            <div class="col-2">
                <img class="img-fluid" src="./assets/images/home/instagram/insta3.webp" alt="">
            </div>
            <div class="col-2">
                <img class="img-fluid" src="./assets/images/home/instagram/insta4.webp" alt="">
            </div>
            <div class="col-2">
                <img class="img-fluid" src="./assets/images/home/instagram/insta5.webp" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button"
                class="btn btn-dark bg-success border-0 px-3 py-2 bg-opacity-100 mt-5 rounded-2 shadow-sm">Visit our
                instagram <i class="fa-brands fa-instagram ms-2"></i></button>
        </div>


        <div class="row mt-5">
            <div
                class="col-lg-6 d-flex flex-column flex-nowrap align-content-center justify-content-center align-items-center">
                <h2 class="fw-bold">Everyone can be a chef in their own kitchen</h2>
                <p class="mt-3">In the realm of cooking, there is a beautiful truth: everyone can be a chef in their own kitchen. Regardless of your skill level or experience, the kitchen is a place where creativity and passion can flourish. It's a space where you can don your apron, grab your utensils, and embark on a culinary adventure.</p>
                <div class="p-2  d-flex align-items-center me-auto  text-light">
                    <button type="button" class="border-0 btn btn-dark bg-dark px-5 py-2 rounded-4 shadow-sm">Sign
                        up</button>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="./assets/images/home/sign-banner-right.webp" alt="">
            </div>
        </div>
    </div>

    <?php require_once "./src/required_pages/newsletter.php" ?>

</div>
</div>
<script src="recipe_preview.js"></script>

<?php require_once "./src/required_pages/footer.php" ?>