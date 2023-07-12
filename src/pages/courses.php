<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>

<div class="container mt-5">
    <h2 class="fw-bold text-center">Courses</h2>
    <p class="text-center grey mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore</p>
    <div class="d-flex justify-content-center">
        <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button type="submit" class="btn btn-dark px-3">Search</button>
        </form>
    </div>

    <div class="row">
        <div class="col-2 temporary-col"></div>
        <div class="col mt-5" id='list-container'>
            
        </div>
        <div class="col-2 temporary-col"></div>
    </div>



</div>

<script src="courses.js"></script>

<?php require_once "../required_pages/footer.php" ?>