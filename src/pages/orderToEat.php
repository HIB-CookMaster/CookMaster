<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>


<div class="container-fluid p-0 m-0">
    <img class="img-fluid rounded-0 p-0 m-0" src="../../assets/images/order/banner-order.png" alt="">
    <div class="container mt-4">

        <div class="d-flex flex-column">
            <div class="green-ultra-light text-center">How it work</div>
            <div class="fs-5 fw-bold text-center">What We Serve</div>
            <p class="opacity-75 text-center mt-3">Product Quality Is Our Priority, <br> And Always Guarantees Halal And
                Safety Until It Is In Your Hands.</p>
        </div>

        <div class="row text-center mt-4">
            <div class="col-lg-4 col-sm-6">
                <img src="../../assets/images/order/easy-to-order.png" alt="">
                <div class="mt-3 ">
                    <span class="fw-bold">Easy To Order</span>
                    <p class="text-center mt-2 opacity-75">You only order through <br> the app</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <img src="../../assets/images/order/fastest.png" alt="">
                <div class="mt-3 ">
                    <span class="fw-bold">Fastest Delivery</span>
                    <p class="text-center mt-2 opacity-75">Delivery will be <br> on time</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <img src="../../assets/images/order/quality.png" alt="">
                <div class="mt-3 ">
                    <span class="fw-bold">Best Quality</span>
                    <p class="text-center mt-2 opacity-75">The best quality of food <br> for you</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-2">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Sort
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" checked name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        For you (Default)
                                    </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Most populars
                                    </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Rating
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="popular">
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <h2>Populars</h2>
                            <a href="" class="link-underline-secondary text-dark">Tout afficher</a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3">
                                <div class="card h-100 border-0 shadow-none">
                                    <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                        class="card-img-top object-fit-cover rounded-2" alt="...">
                                    <span
                                        class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                    <div class="card-body w-100 h-100 p-0 mt-2">
                                        <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                        <div class=" d-flex justify-content-between">
                                            <span class="opacity-75">Shipping cost : <span>3,49€</span> <span class="opacity-75"> ~ 10-25 min</span></span>
                                            
                                        </div>
                                        <div class="d-flex mt-2 justify-content-between align-items-center">
                                            <span class="text-dark rounded-2 p-2 bg-light">8.99 €</span>
                                            <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to cart <i class="fa-solid fa-cart-shopping"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3">
                                <div class="card h-100 border-0 shadow-none">
                                    <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                        class="card-img-top object-fit-cover rounded-2" alt="...">
                                    <span
                                        class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                    <div class="card-body w-100 h-100 p-0 mt-2">
                                        <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                        <div class=" d-flex justify-content-between">
                                            <span class="opacity-75">Shipping cost : <span>3,49€</span> <span class="opacity-75"> ~ 10-25 min</span></span>
                                            
                                        </div>
                                        <div class="d-flex mt-2 justify-content-between align-items-center">
                                            <span class="text-dark rounded-2 p-2 bg-light">8.99 €</span>
                                            <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to cart <i class="fa-solid fa-cart-shopping"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3">
                                <div class="card h-100 border-0 shadow-none">
                                    <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                        class="card-img-top object-fit-cover rounded-2" alt="...">
                                    <span
                                        class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                    <div class="card-body w-100 h-100 p-0 mt-2">
                                        <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                        <div class=" d-flex justify-content-between">
                                            <span class="opacity-75">Shipping cost : <span>3,49€</span> <span class="opacity-75"> ~ 10-25 min</span></span>
                                            
                                        </div>
                                        <div class="d-flex mt-2 justify-content-between align-items-center">
                                            <span class="text-dark rounded-2 p-2 bg-light">8.99 €</span>
                                            <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to cart <i class="fa-solid fa-cart-shopping"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3">
                                <div class="card h-100 border-0 shadow-none">
                                    <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                        class="card-img-top object-fit-cover rounded-2" alt="...">
                                    <span
                                        class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                        <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                    <div class="card-body w-100 h-100 p-0 mt-2">
                                        <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                        <div class=" d-flex justify-content-between">
                                            <span class="opacity-75">Shipping cost : <span>3,49€</span> <span class="opacity-75"> ~ 10-25 min</span></span>
                                            
                                        </div>
                                        <div class="d-flex mt-2 justify-content-between align-items-center">
                                            <span class="text-dark rounded-2 p-2 bg-light">8.99 €</span>
                                            <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to cart <i class="fa-solid fa-cart-shopping"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once "../required_pages/footer.php" ?>