<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>


<div class="container">
    <div class="row w-100 ">
        <div class="col-lg-7 col-sm-5 d-flex align-items-center mt-3 mb-3">
            <img class="img-fluid" src="../../assets/images/sign/sign-banner.webp" alt="">
        </div>
        <div class="col-lg-5 col-sm-7 mt-3 mb-3">
            <span>
                <img src="../../assets/images/logo.webp" alt="">
                <span class="logo-title fw-bold mx-2">CookMaster</span>
            </span>
            <h2 class="fw-bold mt-5 fs-5">Welcome back !</h2>
            <p class="fs-little">Learn with the best</p>
            <form class="mt-5" action="">
                <div class="d-flex mb-3">
                    <div class="px-2 w-100">
                        <label for="email" class="form-label fw-bold fs-little">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="px-2 w-100">
                        <label for="password" class="form-label fw-bold fs-little">Password</label>
                        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary text-center px-5">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div style="margin-top:156px">
    <?php require_once "../required_pages/footer.php" ?>
</div>