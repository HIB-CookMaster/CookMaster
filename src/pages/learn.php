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
        background: #c9c9c9 !important;
    }

    .bg-info {
        background-color: #3FA5DB !important;
    }

    .bg-info-content {
        background-color: #E6F4FA !important;
    }

    .bg-warning-content {
        background-color: #FDEFE1 !important;
    }

    .bg-warning {
        background-color: #F39539 !important;
    }

    .bg-important-content {
        background-color: #f58491 !important;
    }

    .bg-important {
        background-color: #f23047 !important;
    }

    .z-ind-top {
        z-index: 1000 !important;
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
    <!-- This part will remain fixed on top when scrolling -->
    <div class="btn-group w-100 mt-5 position-sticky top-0 z-ind-top" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary bg-dark rounded-0 outline-0 border-0" onclick="window.location.href='/CookMaster'"><i class="fa-solid fa-house"></i></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary rounded-0 custom-btn"></button>
        <button type="button" class="btn btn-primary bg-dark outline-0 border-0"><i class="fa-solid fa-trophy text-warning"></i></button>
    </div>

    <div class="row">
        <div class="col-lg-10">
            <div class="d-flex justify-content-center flex-column mt-3 p-5">
                <!-- Video -->
                <video controls class="embed-responsive-item w-100 card-shadow">
                    <source src="../../assets/videos/certif-vid/sushi.mp4" type="video/mp4">
                </video>
                <!-- Title -->
                <h2 class="opacity-75 mt-5 title">Introduction Title</h2>
                <!-- SubTitle -->
                <h4 class="opacity-75 title">SubTitle</h4>
                <!-- Text Area -->
                <p class="opacity-75 mt-3 description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque exercitationem nam cumque adipisci perferendis eligendi, ipsam voluptatum culpa, quo officiis voluptas ut odio? Eligendi tempora, adipisci eum sint earum dolor hic nesciunt distinctio sit tenetur quo a molestias asperiores at placeat modi nam magnam nostrum aut delectus perferendis voluptatibus animi.</p>
                <!-- Tips -->
                <span class="position-relative p-3 bg-info-content rounded-3 d-block mt-3 opacity-75">
                    Tips : Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptas.
                    <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-info">
                        <i class="fa-solid fa-info fa-lg"></i>
                    </span>
                </span>
                <!-- Warning -->
                <span class="position-relative p-3 bg-warning-content rounded-3 d-block mt-3 opacity-75">
                    Warning : Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptas.
                    <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-warning">
                        <i class="fa-solid fa-info fa-lg"></i>
                    </span>
                </span>
                <!-- Important -->
                <span class="position-relative p-3 bg-important-content rounded-3 d-block mt-3 opacity-75 text-light">
                    Important : Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptas.
                    <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-important">
                        <i class="fa-solid fa-info fa-lg"></i>
                    </span>
                </span>

                <!-- Image -->
                <div class="rounded-5 p-5 d-block mx-auto">
                    <img class="img-fluid rounded-4 w-auto" src="/CookMaster/assets/images/home/featured-food-left.webp" alt="">
                </div>

                <!-- Quizz -->
                <h3 class="mt-2">Quesion 1</h3>
                <hr>
                <p class="question mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, consectetur ?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="question1">
                    <label class="form-check-label ms-2" for="question1">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="question2">
                    <label class="form-check-label ms-2" for="question2">
                        Default checked radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="question3">
                    <label class="form-check-label ms-2" for="question3">
                        Default checked radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="question4">
                    <label class="form-check-label ms-2" for="question4">
                        Default checked radio
                    </label>
                </div>

            </div>

        </div>
        <div class="col-lg-2 mt-2">
            <div class="d-flex justify-content-center flex-column p-4 card-shadow mt-5">
                <span class="text-center opacity-75">Created by</span>
                <img class="img-fluid w-50 h-auto d-block mx-auto mt-2" src="/CookMaster/assets/images/logo_squarre.png" alt="">
                <span class="text-center opacity-50 mt-3">Foodieland, cooking e-learning platform</span>
            </div>
        </div>
    </div>
</div>




<br><br><br><br><br>
<?php require "../required_pages/footer.php"; ?>