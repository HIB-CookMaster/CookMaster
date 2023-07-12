<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>




<?php

$id = $_GET['id'];

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "http://51.75.143.35:8081/recipes/$id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "cache-control: no-cache"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// convert response to json
$response = json_decode($response, true);
$dateString = $response[0]['date'];

$date = new DateTime($dateString);
$formattedDate = $date->format('d F Y');


?>


<div class="container mt-5">
    <h2 class="fw-bold"><?= $response[0]["name"]?></h2>
    <div class="p-2 d-flex align-items-center">
        <img style="height: 40px; width: 40px" src="../../assets/images/logo_squarre.png" class="rounded-circle"
            alt="...">
        <div class="ms-2">
            <span class="d-block fw-bold">FoodieLand</span>
            <span class="d-block text-secondary-emphasis"><?= $formattedDate; ?></span>
        </div>

        <span class="grey opacity-25 h-100 fs-4 mx-3">|</span>

        <i class="fa-solid fa-stopwatch mx-1 fa-xl"></i>
        <div class="ms-2">

            <span class="d-block fw-bold fs-little">PREP TIME</span>
            <span class="d-block text-secondary-emphasis fs-little"><?= $response[0]["prepTime"] . " minutes" ?></span>
        </div>

        <span class="grey opacity-25 h-100 fs-4 mx-3">|</span>

        <i class="fa-solid fa-stopwatch mx-1 fa-xl"></i>
        <div class="ms-2">

            <span class="d-block fw-bold fs-little">COOK TIME</span>
            <span class="d-block text-secondary-emphasis fs-little"><?= $response[0]["cookTime"] . " minutes" ?></span>
        </div>

        <span class="grey opacity-25 h-100 fs-4 mx-3">|</span>
        <i class="fa-solid fa-utensils mx-1 fa-xl"></i>
        <div class="ms-2">

            <span class="d-block fw-bold fs-little"><?= $response[0]["type"] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-12 mt-3">
            <div class="embed-responsive embed-responsive-16by9">
                <video controls class="embed-responsive-item w-100 card-shadow">
                    <source src="../../assets/videos/recipes/<?= $response[0]["video"] ?>" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 p-5 rounded-5 card-shadow d-flex flex-column mt-3">
            <h3 class="fw-bold">Nutrition Information</h3>

            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="p-2 fw-normal">Calories</div>
                <div class="ms-auto p-2 fw-semibold"><?= $response[0]["calories"] . " kcal" ?></div>
            </div>

            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="p-2 fw-normal">Glucides</div>
                <div class="ms-auto p-2 fw-semibold"><?= $response[0]["glucides"] . " g"?></div>
            </div>

            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="p-2 fw-normal">Protein</div>
                <div class="ms-auto p-2 fw-semibold"><?= $response[0]["protein"] . " g"?></div>
            </div>

            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="p-2 fw-normal">Lipides</div>
                <div class="ms-auto p-2 fw-semibold"><?= $response[0]["lipides"] . " g"?></div>
            </div>

            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="p-2 fw-normal">Vitamines</div>
                <div class="ms-auto p-2 fw-semibold"><?= $response[0]["vitamines"] . " g"?></div>
            </div>
            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="p-2 fw-normal">Minéraux</div>
                <div class="ms-auto p-2 fw-semibold"><?= $response[0]["mineraux"] . " g"?></div>
            </div>
            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="p-2 fw-normal">Fibre</div>
                <div class="ms-auto p-2 fw-semibold"><?= $response[0]["fibre"] . " mg"?></div>
            </div>
            <div class="d-flex border-bottom border-secondary-subtle">
                <div class="p-2 fw-normal">Eau</div>
                <div class="ms-auto p-2 fw-semibold"><?= $response[0]["eau"] . " mg"?></div>
            </div>
        </div>
    </div>

    <p class="mt-3 p-3 grey opacity-50"><?= $response[0]["description"]?>
    </p>

    <div class="row mt-5">
        <div class="col-lg-10 col-md-12">
            <h2 class="fw-semibold">Ingredients</h2>
            <h5 class="fw-normal mt-4 opacity-75 fs-6">List of ingredients</h5>
            <div class="d-flex flex-column mb-3 mt-4">
            <?php
                $responses = $response[0]["ingredients"];

                foreach ($responses as $ingredient) {
                    echo '<div class="form-check border-bottom border-secondary-subtle ms-3 p-3">';
                    echo '<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">';
                    echo '<label class="form-check-label ms-3" for="flexCheckDefault">';
                    echo $ingredient;
                    echo '</label>';
                    echo '</div>';
                }
            ?>
            </div>

            <h2 class="fw-semibold mt-5">Recipe</h2>
            <h5 class="fw-normal mt-4 opacity-75 fs-6">Follow the list below step by step</h5>
            <div class="d-flex flex-column mb-3 mt-4">
            <?php
                for ($i = 0; $i < sizeof($response[0]["steps"]); $i++) { ?>
                    <div class="form-check border-bottom border-secondary-subtle ms-3 p-3">
                        <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label ms-3" for="flexCheckDefault">
                            <?= $response[0]["steps"][$i] ?>
                        </label>
                    </div>
                <?php } ?>

            </div>
        </div>
        <?php require_once('../required_pages/newsletter.php') ?>
    </div>


</div>


<?php require_once "../required_pages/footer.php" ?>