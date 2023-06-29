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


<div class="container mt-5">

    <div class="row">
        <div class="col-lg-9 col-sm-6 mt-3 mb-3">
            <span class="fs-3 opacity-75">All Users</span>
        </div>
        <div class="col-lg-3 col-sm-6 mt-3 mb-3">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>

    <table class="table align-middle mb-0 bg-white mt-4">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                            style="width: 45px; height: 45px" class="rounded-circle" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">John Doe</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                </td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline text-dark">User</span>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        <a href="./edit.php">Edit</a>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require "../../required_pages/footer.php"; ?>