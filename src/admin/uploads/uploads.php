<?php require "../../required_pages/header.php"; ?>
<?php require "../../required_pages/navbar.php"; ?>

<div class="bg-cart bg-filter" style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 300px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100">
            <span style="color: white;" class="fs-2">Test </span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light" href="/CookMaster/">Home</a> | <span class="text-success"> Test</span></span>
        </div>
    </div>
</div>

<?php require_once "../nav.php"; ?>

<div class="container">

    <?php if (isset($_GET["success"]) && $_GET["success"] == 1) { ?>

        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>Success!</strong> Your file has been uploaded successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        $_GET["success"] = 0;
    } elseif(isset($_GET['success']) && $_GET["success"] == 2) { ?>
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>Error!</strong> Your file has not been uploaded.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php } elseif(isset($_GET['success']) && $_GET["success"] == 3) { ?>
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>Error!</strong> Your file must be an image or a video.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <h2 class="mt-4 opacity-75">Upload files</h2>
    <form action="./post.php" method="post" enctype="multipart/form-data" class="card-shadow p-5 mt-4">
        <div class="row d-flex">
            <div class="col-lg-8 align-items-center">
                <input class="form-control form-control-lg" id="file" type="file" name="file" />
            </div>
            <div class="col-lg-4 d-flex align-items-center">
                <select class="form-select" name="selections" aria-label="Default select example">
                    <option selected></option>
                    <option value="recipes">Recipes</option>
                    <option value="events">Events</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-5 px-5">Upload</button>
    </form>

</div>

<br><br><br><br>

<?php require "../../required_pages/footer.php"; ?>