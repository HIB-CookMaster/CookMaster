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
</style>



<div id="container" class="container mt-5">
    <div id="infos" class="card-shadow p-5">
        <span class="fs-4 opacity-75">Create a new formation</span>
        <div class="row mt-4">
            <div class="col-lg-6">
                <label class="form-label opacity-75" for="thumbnail">Add a thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail" required />
                <label class="form-label opacity-75 mt-3" for="difficulty">Select difficulty</label>
                <select class="form-select" id="difficulty" aria-label="Default select example" required>

                    <option selected></option>
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div>
            <div class="col-lg-6">
                <label class="form-label opacity-75" for="duration">Formation duration (in hours)</label>
                <input type="time" class="form-control" id="duration" required />

                <label class="form-label opacity-75 mt-3" for="description">Short description</label>
                <input type="text" class="form-control" id="description" required />
            </div>

            <div class="mt-4">
                <label class="form-label opacity-75" for="certifName">Formation name</label>
                <input type="text" id="certifName" name="certifName" class="form-control" required />
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="row mt-3">
        <div class="col-lg-3">
            <ul class="list-group rounded-0 p-4 rounded-4">
                <li id="chapDelim" class="li-hover list-group-item py-3 pointer d-flex justify-content-between my-1 border">
                    Chapter Delimiter <i class="fa-solid fa-plus"></i>
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
                    Add a media <i class="fa-solid fa-plus"></i>
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

                <li id="publishBtn" class="list-group-item py-3 pointer d-flex justify-content-between my-1 border bg-success text-light">
                    PUBLISH CHAPTER <i class="fa-solid fa-check"></i>
                </li>
            </ul>
        </div>
        <div class="col-lg-9 mt-3 p-4" style="max-height: 774px; overflow-y: scroll;">
            <div class="d-flex flex-column" id="main">

            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>


<script src="./create.js"></script>

<?php require "../../required_pages/footer.php"; ?>