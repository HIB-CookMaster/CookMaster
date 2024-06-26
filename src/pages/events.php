<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>

<?php

$address = "Le Comptoir du Relais 9 Carrefour de l'Odéon 75006 Paris";
$address = str_replace(" ", "+", $address);


?>

<style>
    .bg-custom-link {
        background: url("https://cdn.flipsnack.com/blog/freebies/2020/1920x1080_january.png");
    }
    </style>

<div class="container">
    <h2 class="text-center mt-4">Events</h2>


    <div class="row">
        <div class="col-lg-3 shadow-sm border border-secondary-subtle p-0 overflow-x-scroll">
            <div class="mt-4">
                <span class="p-4 ">
                    <span class="fs-3 opacity-50">This</span>
                    <span class="fs-1 fw-bold">Week</span>
                </span>
            </div>

            <div class="d-flex mt-4 bg-success p-4 bg-opacity-10">
                <div class="d-date d-flex flex-column text-center">
                    <span class="p-1 px-2 rounded-3 text-light bg-today">Today</span>
                    <span id='initial' class="fs-1 fw-bold">T</span>
                    <span id='leftnb' class="text-dark opacity-50">10th</span>
                </div>
                <div class="d-date d-flex flex-column ms-4">
                    <span id="event-name" class="fw-semibold">Workshop - Cheese Cake</span>
                    <span class="d-flex px-1 mt-2 opacity-25 align-items-center">
                        <span class="px-little">11:00</span>
                        <i class="fa-solid fa-circle px-1 fa-little"></i>
                        <i class="fa-solid fa-circle px-1 fa-little"></i>
                        <i class="fa-solid fa-circle px-1 fa-little"></i>
                        <i class="fa-solid fa-circle px-1 fa-little"></i>
                        <i class="fa-solid fa-circle px-1 fa-little"></i>
                        <i class="fa-solid fa-circle px-1 fa-little"></i>
                        <span class="px-little">12:00</span>
                    </span>
      

                </div>
            </div>

            <div class="d-flex p-4 h-100 bg-custom-link">

            </div>
        </div>

        <div id="wholecont" class="col-lg-9 shadow-sm border border-secondary-subtle overflow-y-scroll p-0" style="max-height: 1015px">
            <img src="../../assets/images/events/banner.png" class="img-fluid" alt="">

            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="me-auto p-2">
                    <div class="p-3 ">
                        <span class="">
                            <span id="thisdaynb" class="opacity-50">10th,</span>
                            <span id="thisday" class="fw-bold fs-1"> Monday</span>
                            <i class="fa-regular fa-calendar text-info-emphasis fa-2xl ms-3"></i>
                        </span>
                    </div>
                </div>
                <div class="p-2 bg-dark bg-opacity-10 text-dark fw-semibold opacity-75 rounded-3 mx-2 my-2 h-25">21:34
                </div>
            </div>



            <div class="row m-0 p-1 border-bottom border-secondary-subtle">
                <div class="card shadow-none border-0 p-2 d-flex col-lg-6 col-sm-12">
                    <div class="card-body">
                        <h5 id="bigtitle">Workshop - Cheese Cake 
                            <span class="badge bg-secondary bg-opacity-10 ms-2 fw-normal text-dark opacity-50"><i class="fa-solid fa-user fa-2xs me-2"></i>28/31</span>
                            <span class="badge bg-success ms-2 fw-normal text-white bg-opacity-75"><i class="fa-solid fa-tag fa-2xs me-2"></i>15€</span>
                        </h5>
                        <h6 id="adress" class="card-subtitle mb-2 text-body-secondary"><i class="fa-solid fa-location-dot me-2 text-success"></i>Le Comptoir du Relais - 9 Carrefour de l'Odéon, 75006 Paris</h6>
                        <img id="imgeve" src="../../assets/images/events/event1.png" alt="" class="img-fluid rounded-4 shadow-sm">
                        <div class="d-flex">
                            <div class="mt-3">
                                <div>
                                    <i class="fa-solid fa-clock me-1 text-success"></i>
                                    <span class="opacity-75 text-dark">Today</span>
                                </div>

                                <div id="fromto" class="mt-2 opacity-75 text-dark fs-little">From 11:00 am to 12:00 pm</div>
                            </div>
                            <div class="d-flex align-items-center ms-auto pointer">
                                <div class="text-primary-emphasis me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-share me-2"></i><span>Event details</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 mx-auto mb-3 p-3">
                    <iframe id="if" width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen src="">
                    </iframe>
                </div>
            </div>




        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-column">
                    <span  class="p-2 fs-3">Event details</span>
                    <div class="row p-3">
                        <div class="col-lg-8">
                            <img class="img-fluid rounded-4" src="../../assets/images/events/event.png" alt="">
                        </div>
                        <div class="col-lg-4">
                            <iframe id="modalif" width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen src="">
                            </iframe>
                        </div>
                    </div>
                    <div class="d-flex flex-column rounded-4" style="background-color: #FFFFFF;">
                        <span id="modaltitle" class="mt-2 opacity-75 p-3">Workshop - Cheese Cake 
                            <span class="badge ms-2 fw-normal text-dark card-shadow"><i class="fa-solid fa-user fa-2xs me-2"></i>28/31</span>
                            <span class="badge ms-2 fw-normal text-white bg-success card-shadow"><i class="fa-solid fa-tag fa-2xs me-2"></i>15€</span>
                        </span>

                        <div class="row px-4 rounded-3 mx-3 card-shadow">
                            <div class="col p-4">
                                <span><i style="width: 40px!important" class="fa-solid fa-location-dot text-center me-2 text-light bg-dark rounded-1 p-2 card-shadow"></i>Location</span>
                                <div class="d-flex flex-column mt-2">
                                    <span id="modaladdr" class="opacity-75">Le Comptoir du Relais - 9 Carrefour de l'Odéon</span>
                                    <span class="opacity-75">75006 Paris, France</span>

                                </div>
                            </div>
                            <div class="col p-4">
                                <span><i style="width: 40px!important" class="fa-solid fa-clock text-center me-2 text-light bg-dark rounded-1 p-2 card-shadow"></i>Date & Time</span>
                                <div class="d-flex flex-column mt-2">
                                    <span id='moddate' class="opacity-75">28th June - 2nd July 2022,</span>
                                    <span id='modhr' class="opacity-75">10 am - 4 pm Eastern Daylight Time</span>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 d-flex mt-3 p-3">
                                <button type="button" class="btn btn-primary mx-2 w-100 fs-6">Join the event</button>
                            </div>
                            <div class="col-lg-4 d-flex mt-3 p-3">
                                <button type="button" class="btn btn-dark mx-2 w-100" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="./event.js"></script>
<?php require_once "../required_pages/footer.php" ?>