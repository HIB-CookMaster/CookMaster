<?php require "../required_pages/header.php"; ?>
<?php require "../required_pages/navbar.php"; ?>

<style>
    .custom-btn {
        background: #ECECEC;
        outline: none !important;
        border: 0 !important;
        border-right: 2px solid #D9D9D9 !important;
        border-bottom: 4px solid #B1B1B1 !important;
    }

    .custom-btn:hover {
        background: #c9c9c9!important;
    }
</style>


<div class="bg-cart bg-filter" style="background-color: #F6F4FD; height: 200px; background-size: cover; background-position: 0% 20%">
    <div class="d-flex container pt-3">
        <span class="me-1 opacity-75 pointer" onclick="window.location.href='/CookMaster'">Home</span>
        <span class="mx-1">></span>
        <span class="mx-1 opacity-75 pointer" onclick="window.location.href='/CookMaster/src/pages/graduate.php'">Professional training</span>
        <span class="mx-1">></span>
        <span class="mx-1 opacity-50">Learn to make sushi</span>
    </div>
    <div class="container d-flex w-100 mt-5">
        <div class="d-flex justify-content-between h-100 w-100">
            <span class="fs-2 text-dark">Learn to make sushi</span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-dark" href="/CookMaster/">Home</a> <span class="text-dark">|</span> <span class="text-success"> Graduate formation</span></span>
        </div>
    </div>
    <div class="container">
        <div class="d-flex mt-4">
            <div class="">
                <i class="fa-regular fa-clock "></i>
                <span class="opacity-75 ms-2">6 hours</span>

            </div>
            <div class="">
                <i class="fa-solid fa-signal ms-4"></i>
                <span class="opacity-75 mx-2">Advanced</span>
            </div>
            <div>
                <i class="fa-solid fa-medal ms-4"></i>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="btn-group w-100 mt-5" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary bg-dark rounded-0 outline-0 border-0" onclick="window.location.href='/CookMaster'"><i class="fa-solid fa-house"></i></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary bg-dark outline-0 border-0"><i class="fa-solid fa-trophy text-warning"></i></button>
    </div>
</div>



<br><br><br><br><br>
<?php require "../required_pages/footer.php"; ?>