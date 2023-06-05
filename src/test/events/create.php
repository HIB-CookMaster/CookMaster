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
    <form action="" class="mt-5" method="post">
        <span class="fs-4 opacity-75"><i class="fa-solid fa-calendar-days me-2"></i>New Event</span>

        <!-- Event Name input -->
        <div class="form-outline mb-4 mt-3">
            <input type="Text" id="name" name="name" class="form-control" />
            <label for="name" class="form-label">Event Name</label>
        </div>
        <!-- Date input -->
        <div class="row d-flex justify-content-between p-2 mt-3">
            <div class="form-outline mb-4 col-5">
                <input type="datetime-local" id="start" name="start" class="form-control" />
            </div>
            <div class="col-1 text-center d-flex align-items-center justify-content-center">to</div>
            <div class="form-outline mb-4 col-5">
                <input type="datetime-local" id="end" name="end" class="form-control" />
            </div>
        </div>

        <span class="fs-4 opacity-75"><i class="fa-solid fa-house me-2"></i></i>Choose a place</span>

        <div class="row mt-4">
            <div class="col-lg-2 col-sm-12 col-md-2 card-shadow py-3 mx-2 px-3 mb-3 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="/CookMaster/assets/images/location/locale1.jpg" class="card-img-top" alt="...">
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold text-center">18, rue des Blancs Manteaux</h5>
                        <!-- <div class="mt-3 d-flex justify-content-between">
                            <span><i class="fa-regular fa-calendar me-2"></i><span class="opacity-75">Available</span></span>
                        </div> -->

                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-eye me-2 fs-little"></i>View Kitchen</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>





<?php require "../../required_pages/footer.php"; ?>