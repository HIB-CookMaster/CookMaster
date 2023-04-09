<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>

<div class="container mt-5">
    <div class="row w-100">
        <div class="col-lg-7 col-sm-5 d-flex align-items-center mt-3 mb-3">
            <img class="img-fluid" src="../../assets/images/sign/sign-banner.webp" alt="">
        </div>
        <div class="col-lg-5 col-sm-7 mt-3 mb-3">
            <span>
                <img src="../../assets/images/logo.webp" alt="">
                <span class="logo-title fw-bold mx-2">CookMaster</span>
            </span>
            <h2 class="fw-bold mt-5 fs-5">Create account</h2>
            <p class="fs-little">Learn with the best</p>
            <form class="mt-5" action="">
                <div class="d-flex mb-3">
                    <div class="px-2 w-100">
                        <label for="first-name" class="form-label fw-bold fs-little">First name</label>
                        <input type="text" class="form-control" id="first-name" aria-describedby="firstNameHelp">
                    </div>
                    <div class="px-2 w-100">
                        <label for="last-name" class="form-label fw-bold fs-little">Last name</label>
                        <input type="text" class="form-control" id="last-name" aria-describedby="lastNameHelp">
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="px-2 w-100">
                        <label for="email" class="form-label fw-bold fs-little">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="px-2 w-100">
                        <label for="birthday" class="form-label fw-bold fs-little">Date of birth</label>
                        <input type="date" class="form-control" id="birthday" aria-describedby="birthdayHelp">
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div class="px-2 w-100">
                        <label for="password" class="form-label fw-bold fs-little">Password</label>
                        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp">
                    </div>
                    <div class="px-2 w-100">
                        <label for="password2" class="form-label fw-bold fs-little">Confirm password</label>
                        <input type="password" class="form-control" id="password2" aria-describedby="password2Help">
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="policy">
                    <label class="form-check-label" for="policy">I agree to all the <span class="text-primary-emphasis"> Terms </span>  and <span class="text-primary-emphasis"> Privacy policy  </span> </label>
                </div>
                <div class="w-100 d-flex justify-content-center mb-5">
                    <button type="submit" class="btn btn-primary text-center px-5">Create account</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "../required_pages/footer.php" ?>