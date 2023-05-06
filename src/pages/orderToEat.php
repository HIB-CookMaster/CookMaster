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
                                    <input id="defaultBtn" class="form-check-input" type="radio" checked
                                        name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        For you (Default)
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <span class="">Sorting price</span>
                                    <div class="form-check mt-3 ms-3">
                                        <input id="ascendingPriceBtn" class="form-check-input" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Ascending price
                                        </label>
                                    </div>

                                    <div class="form-check mt-3 ms-3">
                                        <input id="descendingPriceBtn" class="form-check-input" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Descending price
                                        </label>
                                    </div>
                                </div>

                                <div class="form-check mt-3">
                                    <input id="ratingBtn" class="form-check-input" type="radio" name="flexRadioDefault"
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
                <div>
                    <div class="row" id="orderContainer">
                        <div data-price="5.60" data-rating="3.2" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default popular">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 3.2</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">5.60 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-price="9.99" data-rating="3.8" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default popular">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/cauliflower.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Cauliflower</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3.49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 3.8</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">9.99 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-price="8.45" data-rating="4.4" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/chicken-meatballs.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3.49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 4.4</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">8.45 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="6.20" data-rating="4.9" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default popular">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/chicken-rice.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 4.9</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">6.20 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="7.99" data-rating="4.9" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default popular">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/juicy-wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 4.9</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">7.99 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="12.98" data-rating="2.1" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default popular">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 2.1</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">12.98 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="7" data-rating="3.6" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 3.6</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">7 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="5" data-rating="4.5" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 4.5</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">5 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="8.99" data-rating="5" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default popular">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 5</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">8.99 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="10" data-rating="1.9" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 1.9</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">10 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="11" data-rating="4.3" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default popular">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 4.3</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">11 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-price="15" data-rating="4" class="col-lg-3 col-md-4 col-sm-6 mb-3 mb-4 mt-3 default popular">
                            <div class="card h-100 border-0 shadow-none">
                                <img style="height: 100px" src="../../assets/images/home/recipes/wagyu-beef.webp"
                                    class="card-img-top object-fit-cover rounded-2" alt="...">
                                <span class="position-absolute translate-middle p-1 position-x-y bg-white rounded-pill">
                                    <i class="fa-solid fa-heart px-1 py-1 text-danger"></i>
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                <div class="card-body w-100 h-100 p-0 mt-2">
                                    <h5 class="card-title">Big and Juicy Wagyu Beef</h5>
                                    <div class=" d-flex justify-content-between w-100">
                                        <span class="opacity-75 d-flex justify-content-between w-100">
                                            <div>
                                                <span>Shipping cost :</span>
                                                <span>3,49€</span>
                                            </div>
                                            <span class="opacity-75"><i
                                                    class="fa-solid fa-star fa-2xs text-success"></i> 4</span>
                                        </span>
                                    </div>
                                    <div class="d-flex mt-2 justify-content-between align-items-center">
                                        <span class="text-dark rounded-2 p-2 bg-light">15 €</span>
                                        <button type="button" class="btn btn-primary text-capitalize add-to-cart">add to
                                            cart <i class="fa-solid fa-cart-shopping"></i></button>
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

<script src="../script/orderToEat.js"></script>

<?php require_once "../required_pages/footer.php" ?>