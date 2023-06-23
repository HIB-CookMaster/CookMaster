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

<style>
    .li-hover:hover {
        background-color: #f8f9fa !important;
    }

    .scroll-forcing {
        overflow-y: scroll;
        max-height: 450px;
    }
</style>

<div id="container" class="container mt-5">
    <div class="d-flex justify-content-between w-100">
        <div class="form-outline w-25">
            <input type="text" id="certifName" name="certifName" class="form-control" />
            <label class="form-label" for="form1Example1">Certification name</label>
        </div>
        <button id="publishBtn" type="btn" class="p-2 px-4 text-light btn btn-success text-end">PUBLISH</button>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3">
            <ul class="list-group rounded-0 p-3 scroll-forcing">
                <li id="saveBtn" class="list-group-item py-3 pointer d-flex justify-content-between my-1 border bg-success rounded-4 mb-3 text-light">
                    SAVE <i class="fa-solid fa-check"></i>
                </li>
                <li id="titleBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Title <i class="fa-solid fa-plus"></i>
                </li>
                <li id="subTitleBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Subtitle <i class="fa-solid fa-plus"></i>
                </li>
                <li id="textAreaBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Text Area <i class="fa-solid fa-plus"></i>
                </li>
                <li id="imgBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Image <i class="fa-solid fa-plus"></i>
                </li>
                <li id="videoBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Video <i class="fa-solid fa-plus"></i>
                </li>
                <li id="tipsBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Tips <i class="fa-solid fa-plus"></i>
                </li>
                <li id="importantBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Important <i class="fa-solid fa-plus"></i>
                </li>
                <li id="warningBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Warning <i class="fa-solid fa-plus"></i>
                </li>

                <li id="quizzBtn" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Quizz <i class="fa-solid fa-plus"></i>
                </li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="d-flex flex-column" id="main">

            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>


<script src="./create.js"></script>

<?php require "../../required_pages/footer.php"; ?>