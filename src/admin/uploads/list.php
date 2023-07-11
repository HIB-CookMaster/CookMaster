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

    <form method="post" action="list.php">
        <div class="btn-group d-flex flex-row p-4 mt-4 shadow-0">
            <button type="submit" name="type" value="all" class="btn btn-primary mx-2 active">All</button>
            <button type="submit" name="type" value="recipes" class="btn btn-primary mx-2">Recipes</button>
            <button type="submit" name="type" value="events" class="btn btn-primary mx-2">Events</button>
        </div>
    </form>


    <?php
    $type = isset($_POST['type']) ? $_POST['type'] : 'all';

    if ($type == 'all') {
        $imagesEvents = glob("../../../assets/images/events/*.{jpg,jpeg,gif,png}", GLOB_BRACE);
        $imagesRecipes = glob("../../../assets/images/recipes/*.{jpg,jpeg,gif,png}", GLOB_BRACE);
        $videosEvents = glob("../../../assets/videos/events/*.{mp4, webm}", GLOB_BRACE);
        $videosRecipes = glob("../../../assets/videos/recipes/*.{mp4, webm}", GLOB_BRACE);
        $files = array_merge($imagesEvents, $imagesRecipes, $videosEvents, $videosRecipes);
    } else {
        $files = array_merge(
            glob("../../../assets/images/$type/*.{jpg,jpeg,gif,png}", GLOB_BRACE),
            glob("../../../assets/videos/$type/*.{mp4, webm}", GLOB_BRACE)
        );
    }

    echo "<div class='container'>";
    echo "<div class='row'>";
    $count = 0;
    foreach ($files as $file) {
        if ($count != 0 && $count % 4 == 0) {
            echo "</div>";
            echo "<div class='row'>";
        }

        $fileType = pathinfo($file, PATHINFO_EXTENSION);
        echo "<div class='col-md-3 position-relative'>";

        if (in_array($fileType, ['jpg', 'jpeg', 'gif', 'png'])) {
            echo "<img src='$file' class='img-fluid img-thumbnail object-fit-cover' alt='Image' />";
        } else if ($fileType == 'mp4') {
            echo "<video controls class='img-fluid img-thumbnail object-fit-cover'><source src='$file' type='video/mp4'>Your browser does not support the video tag.</video>";
        }

        echo "<form method='post' action='delete_file.php' id='form$count' onsubmit='return confirm(\"Are you sure you want to delete this file?\");'>
          <input type='hidden' name='file' value='$file' />
          <button type='submit' class='btn btn-link p-0 border-0 position-absolute top-0 end-0'>
              <i class='fas fa-times'></i>
          </button>
          </form>";

        echo "</div>";
        $count++;
    }
    echo "</div>";
    echo "</div>";
    ?>


</div>

<br><br><br><br>

<?php require "../../required_pages/footer.php"; ?>