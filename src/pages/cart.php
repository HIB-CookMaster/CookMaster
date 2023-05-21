<?php require "../required_pages/header.php"; ?>
<?php require "../required_pages/navbar.php"; ?>

<div class="bg-cart bg-filter"
    style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 500px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100">
            <span style="color: white;" class="fs-2">Cart </span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light" href="/CookMaster/">Home</a> |  <span class="text-success"> Cart</span></span>
        </div>
    </div>
</div>

<div class="container w-100 mt-5">
    <div class="d-flex justify-content-between w-100">
        <div class="d-flex align-items-center justify-content-between w-100 mt-5 border-top p-5">
            <i class="fa-solid fa-x fa-2xs"></i>
            <img style="width: 90px" src="/CookMaster/assets/images/home/recipes/chicken-rice.webp" alt="">
            <span>Vegetables Juices</span>
            <span class="opacity-75 price-for-one">139 €</span>

            <div class="d-flex">
                <i class="fa-solid fa-minus fa-xs p-2 py-3 border pointer minus-btn"></i>
                <span class="border-top border-bottom p-2 px-3 count-value">1</span>
                <i class="fa-solid fa-plus p-2 border py-3 fa-xs pointer plus-btn"></i>
            </div>

            <span class="fw-regular total-price"></span>
        </div>
    </div>

    <div class="d-flex justify-content-between w-100">
        <div class="d-flex align-items-center justify-content-between w-100 mt-5 border-top p-5">
            <i class="fa-solid fa-x fa-2xs"></i>
            <img style="width: 90px" src="/CookMaster/assets/images/home/recipes/chicken-rice.webp" alt="">
            <span>Vegetables Juices</span>
            <span class="opacity-75 price-for-one">139 €</span>

            <div class="d-flex">
                <i class="fa-solid fa-minus fa-xs p-2 py-3 border pointer minus-btn"></i>
                <span class="border-top border-bottom p-2 px-3 count-value">1</span>
                <i class="fa-solid fa-plus p-2 border py-3 fa-xs pointer plus-btn"></i>
            </div>

            <span class="fw-regular total-price"></span>
        </div>
    </div>

    <div class="d-flex justify-content-between w-100">
        <div class="d-flex align-items-center justify-content-between w-100 mt-5 border-top p-5">
            <i class="fa-solid fa-x fa-2xs"></i>
            <img style="width: 90px" src="/CookMaster/assets/images/home/recipes/chicken-rice.webp" alt="">
            <span>Vegetables Juices</span>
            <span class="opacity-75 price-for-one">139 €</span>

            <div class="d-flex">
                <i class="fa-solid fa-minus fa-xs p-2 py-3 border pointer minus-btn"></i>
                <span class="border-top border-bottom p-2 px-3 count-value">1</span>
                <i class="fa-solid fa-plus p-2 border py-3 fa-xs pointer plus-btn"></i>
            </div>

            <span class="fw-regular total-price"></span>
        </div>
    </div>

    <div class="border-top py-4">
        <form action="" method="post">
            <input placeholder="Coupon code" type="text " class="border-5 custom-coupon p-3">
            <button class="btn bg-dark rounded-0 p-3 ms-2 text-light" type="submit">Apply Coupon</button>
        </form>
    </div>

    <div class="row">
        <div class="temporary-col-2 col-8"></div>
        <div class="col">
            <span>Cart Totals</span>
            <div class="d-flex justify-content-between py-3 border-top mt-3 bg-light-subtle">
                <span class="opacity-75">Cart Subtotal</span>
                <span class="opacity-75">618 €</span>
            </div>
            <div class="d-flex justify-content-between py-3 border-top bg-light-subtle">
                <span class="opacity-75">Shipping and Handing</span>
                <span class="opacity-75">15 €</span>
            </div>
            <div class="d-flex justify-content-between py-3 border-top bg-light-subtle">
                <span class="opacity-75">Coupon code</span>
                <span class="opacity-75">- 0 €</span>
            </div>
            <div class="d-flex justify-content-between py-3 border-top bg-light-subtle">
                <span class="opacity-100 fw-bold">Order Total</span>
                <span class="opacity-100 fw-bold">633 €</span>
            </div>
            <button type="submit" class="btn w-100 rounded-0 bg-green text-light">Proceed to checkout</button>
        </div>
    </div>
</div>


<script src="/CookMaster/src/script/cart.js"></script>
<?php require "../required_pages/footer.php"; ?>