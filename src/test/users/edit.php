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


<div class="container mt-4">
    <div class="row">
        <div class="col-12 ps-4">
            <span class="fs-3 opacity-25">Edit Profile</span>

            <div class="mt-4">
                <form action="" method="post" class="mt-4">
                    <div class="row">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="col-lg-6 col-sm-12">
                            <span class="fs-6 opacity-25">Personal</span>
                            <div class="row mb-4 mt-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="name" class="form-control" value="John" />
                                        <label class="form-label" for="name" name="firstName">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="surname" class="form-control" value="Doe" />
                                        <label class="form-label" for="surname" name="lastName">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="code" class="form-control" name="code" value="75012" />
                                <label class="form-label" for="code">Natinoal Code</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="date" id="birth" class="form-control" name="birth" value="1997-05-22" />
                                <label class="form-label" for="birth">Date of birth</label>
                            </div>
                        </div>


                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="col-lg-6 col-sm-12">
                            <span class="fs-6 opacity-25">Contact</span>
                            <div class="row mb-4 mt-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="email" id="email" name="email" class="form-control" value="JohnDoe@gmail.com" />
                                        <label class="form-label" for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="tel" id="tel" name="tel" class="form-control" value="0621415741" />
                                        <label class="form-label" for="tel">Phone Number</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="country" name="country" class="form-control" value="France" />
                                <label class="form-label" for="country">Country</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="city" name="city" class="form-control" value="Paris" />
                                <label class="form-label" for="city">City</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <span class="fs-6 opacity-25">Address</span>
                            <div class="row mb-4 mt-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="streetNumber" name="streetNumber" class="form-control" value="" />
                                        <label class="form-label" for="streetNumber">N °</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="street" name="street" class="form-control" value="" />
                                        <label class="form-label" for="street">Street</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="additional" name="additional" class="form-control" value="" />
                                <label class="form-label" for="additional">Additional address</label>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="px-2 w-100">
                                    <label for="role" class="form-label fw-bold fs-little">Role</label>
                                    <select class="form-select" aria-label="Default select example" id="role" name="role">
                                        <option value="admin" name="admin">Admin</option>
                                        <option value="chef" name="chef">Chef</option>
                                        <option selected value="user" name="user">User</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success px-5 my-2 mb-4">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php require "../../required_pages/footer.php"; ?>