<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>

<div class="bg-cart bg-filter"
    style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 500px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100">
            <span style="color: white;" class="fs-2">Contact </span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light"
                    href="/CookMaster/">Home</a> | <span class="text-success"> Contact</span></span>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col d-flex p-3">
            <div class="d-flex border border-1 flex-column align-items-center justify-content-center w-100 p-4">
                <div><img src="/CookMaster/assets/images/contact/email.png" alt=""></div>
                <div class="fw-bold fs-5 mt-3">Email Address</div>
                <div class="mt-3 fw-regular opacity-50">info@webmail.com</div>
                <div class="fw-regular opacity-50">jobs@webexample.com</div>
            </div>
        </div>
        <div class="col d-flex p-3">
            <div class="d-flex border border-1 flex-column align-items-center justify-content-center w-100 p-4">
                <div><img src="/CookMaster/assets/images/contact/phone.png" alt=""></div>
                <div class="fw-bold fs-5 mt-3">Phone Number</div>
                <div class="mt-3 fw-regular opacity-50">+33 3 44 54 14 10</div>
                <div class="fw-regular opacity-50">+88 50142514</div>
            </div>
        </div>
        <div class="col d-flex p-3">
            <div class="d-flex border border-1 flex-column align-items-center justify-content-center w-100 p-4">
                <div><img src="/CookMaster/assets/images/contact/address.png" alt=""></div>
                <div class="fw-bold fs-5 mt-3">Office Address</div>
                <div class="mt-3 fw-regular opacity-50">18/A, New Born Town Hall</div>
                <div class="fw-regular opacity-50">New York, US</div>
            </div>
        </div>
    </div>

    <div class="border border-2 border-secondary-subtle p-4 mt-5 mb-5">
        <span>Contact Us</span>
        <div>
            <form class="mt-3">
                <div class="mb-3 row">
                    <div class="col">
                        <input type="text" placeholder="Enter your name" class="form-control p-2 rounded-0"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <input type="email" placeholder="Enter mail address" class="form-control p-2 rounded-0"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <select class="form-select rounded-0 p-2" aria-label="Default select example">
                            <option selected>Select Service Type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="number" placeholder="Enter Phone Number" class="form-control p-2 rounded-0"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="mb-3 row p-2">
                    <textarea style="min-height: 150px" placeholder="Enter message" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Save my name, email, and website in this browser
                        for the next time I comment.</label>
                </div>
                <button type="submit" class="btn text-light rounded-0 p-3 px-5 bg-green">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require "../required_pages/footer.php"; ?>