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


<div class="container shadow-sm mt-5 mb-5">
    <h2 class="opacity-75">Create a new User</h2>
    <form class="mt-5 p-3" action="">
        <div class="d-flex mb-3">
            <div class="px-2 w-100">
                <label for="first-name" class="form-label fw-bold fs-little">First name</label>
                <input type="text" class="form-control" id="first-name" name="firstName" aria-describedby="firstNameHelp">
            </div>
            <div class="px-2 w-100">
                <label for="last-name" class="form-label fw-bold fs-little">Last name</label>
                <input type="text" class="form-control" id="last-name" name="lastName" aria-describedby="lastNameHelp">
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="px-2 w-100">
                <label for="email" class="form-label fw-bold fs-little">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="px-2 w-100">
                <label for="birthday" class="form-label fw-bold fs-little">Date of birth</label>
                <input type="date" class="form-control" id="birthday" name="birth" aria-describedby="birthdayHelp">
            </div>
        </div>

        <div class="d-flex mb-3">
            <div class="px-2 w-100">
                <label for="password" class="form-label fw-bold fs-little">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
            </div>
            <div class="px-2 w-100">
                <label for="password2" class="form-label fw-bold fs-little">Confirm password</label>
                <input type="password" class="form-control" id="password2" name="password2" aria-describedby="password2Help">
            </div>
        </div>

        <div class="d-flex mb-3">
            <div class="px-2 w-100">
                <label for="password" class="form-label fw-bold fs-little">Role</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="admin" name="admin">Admin</option>
                    <option value="chef" name="chef">Chef</option>
                    <option selected value="user" name="user">User</option>
                </select>
            </div>
        </div>

        <div class="w-100 mb-5 mt-3">
            <button type="submit" class="btn btn-primary px-5 mt-5">Create</button>
        </div>
    </form>
</div>



<?php require "../../required_pages/footer.php"; ?>