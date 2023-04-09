<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>

<style>
    input[type="file"] {
        display: none;
    }
</style>

<?php require_once "../required_pages/profil-banner.php" ?>

<div class="container mt-4">
    <div class="row">
        <?php require ("../required_pages/profil-nav.php") ?>
        <div class="col-lg-11 col-md-10 col-sm-10 ps-4">
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
                                        <input type="text" id="name" class="form-control" value="Mobina" />
                                        <label class="form-label" for="name">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="surname" class="form-control" value="Mirbaheri" />
                                        <label class="form-label" for="surname">Surname</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="code" class="form-control" value="60100" />
                                <label class="form-label" for="code">Natinoal Code</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="date" id="birth" class="form-control" value="1997-05-22" />
                                <label class="form-label" for="birth">Date of birth</label>
                            </div>
                        </div>


                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="col-lg-6 col-sm-12">
                            <span class="fs-6 opacity-25">Contact</span>
                            <div class="row mb-4 mt-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="email" id="email" class="form-control" value="maerrb@gmail.com" />
                                        <label class="form-label" for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="tel" id="tel" class="form-control" value="0621415741" />
                                        <label class="form-label" for="tel">Phone Number</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="country" class="form-control" value="France" />
                                <label class="form-label" for="country">Country</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="city" class="form-control" value="Paris" />
                                <label class="form-label" for="city">City</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <span class="fs-6 opacity-25">Address</span>
                            <div class="row mb-4 mt-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="streetNumber" class="form-control" value="" />
                                        <label class="form-label" for="streetNumber">N °</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="street" class="form-control" value="" />
                                        <label class="form-label" for="street">Street</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="additional" class="form-control" value="" />
                                <label class="form-label" for="additional">Additional address</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success px-5 my-2 mb-4">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mt-9"></div>


<?php require_once "../required_pages/footer.php" ?>