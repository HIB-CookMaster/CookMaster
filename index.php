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
        <p class="text-center">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqut enim ad minim </p>
    </div>
    <!-- Card section -->
    <div class="container mt-5">
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
            <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mx-4 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/roasted-salmon.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-regular fa-heart px-1 py-1 text-secondary"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Fresh Lime Roasted Salmon with Ginger Sauce</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Snack</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mx-4 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/pancake.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-regular fa-heart px-1 py-1 text-secondary"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Strawberry Oatmeal Pancake with Honey Syrup</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Snack</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mb-3 mx-4 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/mayonnaise-salad.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Fresh and Healthy Mixed Mayonnaise Salad</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Snack</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mx-4 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/chicken-meatballs.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-regular fa-heart px-1 py-1 text-secondary"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Chicken Meatballs with Cream Cheese</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Snack</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-4 h-100 mx-4 mb-4 mt-3">
                <img class="img-fluid" src="./assets/images/home/recipes/ads.webp" alt="">
            </div>

            <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mb-3 mx-4 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/fruity-pancake.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Fruity Pancake with Orange & Blueberry</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Snack</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mx-4 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/chicken-rice.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-regular fa-heart px-1 py-1 text-secondary"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">The Best Easy One Pot Chicken and Rice</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Snack</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-4 card-shadow py-3 px-3 mx-4 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/creamy-chicken-pasta.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-regular fa-heart px-1 py-1 text-secondary"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">The Creamiest Creamy Chicken and Bacon Pasta</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Snack</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="second-section w-100 mt-7">
        <div class="row">
            <div class="col-6">
                <h2 class="fw-bold fs-1">Try this delicious recipe to make your day</h2>
            </div>
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqut enim ad minim </p>
            </div>
        </div>

    </div>

    <!-- Card section 2 / Try this delicious recipe to make your day -->
    <div class="container mt-5">
        <div class="row align-items-start d-flex justify-content-center">
            <div class="col-lg-3 col-sm-6 col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/tropical-fruit.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Mixed Tropical Fruit Salad with Superfood Boosts </h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Healthy</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/juicy-wagyu-beef.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Big and Juicy Wagyu Beef Cheeseburger</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Western</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/fired-rice.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Healthy Japanese Fried Rice with Asparagus</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Healthy</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/cauliflower.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Cauliflower Walnut Vegetarian Taco Meat</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Eastern</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/rainbow-chicken.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Rainbow Chicken Salad with Almond Honey Mustard Dressing</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Healthy</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/spicy-sandwichs.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Barbeque Spicy Sandwiches with Chips</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Snack</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/firecracker.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Firecracker Vegan Lettuce Wraps - Spicy!</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Seafood</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-none">
                    <img src="./assets/images/home/recipes/chicken-ramen.webp" class="card-img-top" alt="...">
                    <span class="position-absolute translate-middle p-2 position-x-y bg-white rounded-pill">
                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold">Chicken Ramen Soup with Mushroom</h5>
                        <div class="mt-4">
                            <span><i class="fa-solid fa-clock me-2"></i>30 Minutes</span>
                            <span class="ms-4"><i class="fa-solid fa-utensils me-2"></i>Japanese</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="instagram-section w-100 mt-7">
        <h2 class="fw-bold fs-1 text-center">Check out @cookmaster on Instagram</h2>
        <p class="mt-4 text-center">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqut enim ad minim </p>
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
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqut enim ad minim </p>
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


<?php require_once "./src/required_pages/footer.php" ?>