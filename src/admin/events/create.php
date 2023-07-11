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

<style>
    .img-custom {
        height: 200px !important;
        object-fit: cover !important;
    }
</style>

<?php require_once "../nav.php"; ?>

<div class="container">
    <form action="../../events/createEvents.php" class="mt-5 card-shadow p-4" method="post">
        <span class="fs-4 opacity-75"><i class="fa-solid fa-calendar-days me-2"></i>New Event</span>
        <div class="d-block mt-4">
            <span class="fs-6">Event thumbnail</span>
            <select id="imageSelect" name="thumbnail">
                <?php
                $directory = "../../../assets/images/events/";
                $images = glob($directory . "*.{jpg,jpeg,gif,png,bmp}", GLOB_BRACE);
                foreach ($images as $image) {
                    $filename = basename($image);
                    echo '<option value="' . $filename . '">' . $filename . '</option>';
                }
                ?>
            </select>
            <div class="d-block  mt-2 mb-2">
                <img id="preview" class="img-fluid" src="" style="max-width:200px; max-height:200px;" />
            </div>
            <script>
                var select = document.getElementById('imageSelect');
                var preview = document.getElementById('preview');
                // Set initial preview image
                preview.src = '../../../assets/images/events/' + select.value;
                select.addEventListener('change', function() {
                    preview.src = '../../../assets/images/events/' + select.value;
                });
            </script>
        </div>

        <!-- Event Name input -->
        <div class="form-outline mb-4 mt-3">
            <input type="Text" id="name" name="name" class="form-control" />
            <label for="name" class="form-label">Event Name</label>
        </div>
        <!-- Date input -->
        <div class="row d-flex justify-content-between p-2 mt-3">
            <div class="form-outline mb-4 col-5">
                <input type="datetime-local" id="start" name="start" class="form-control" />
            </div>
            <div class="col-1 text-center d-flex align-items-center justify-content-center">to</div>
            <div class="form-outline mb-4 col-5">
                <input type="datetime-local" id="end" name="end" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-outline mb-4 mt-3">
                    <input type="Number" id="eventPrice" name="eventPrice" class="form-control" />
                    <label for="eventPrice" class="form-label">Price (€)</label>
                </div>
            </div>

            <div class="col-6">
                <div class="form-outline mb-4 mt-3">
                    <input type="Number" id="nbPers" name="nbPers" class="form-control" />
                    <label for="nbPers" class="form-label">Max number of participants</label>
                </div>
            </div>
        </div>

        <span class="fs-4 opacity-75"><i class="fa-solid fa-house me-2"></i></i>Choose a place</span>

        <div class="row mt-4 p-4">
            <div class="col-lg-4 col-sm-12 col-md-2 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="/CookMaster/assets/images/location/locale1.jpg" class=" fit-cover img-custom" alt="...">
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold text-center">18 rue des Blancs Manteaux, 75004 Paris</h5>
                        <div class="form-outline mb-4 mt-3">
                            <select id="location" name="location" class="form-control form-select border border-4">
                                <option selected>Select a room</option>
                                <option value="18 rue des Blancs Manteaux, 75004 Paris - Room 1">18 rue des Blancs Manteaux, 75004 Paris - Room 1</option>
                                <option value="18 rue des Blancs Manteaux, 75004 Paris - Room 2">18 rue des Blancs Manteaux, 75004 Paris - Room 2</option>
                                <option value="18 rue des Blancs Manteaux, 75004 Paris - Room 3">18 rue des Blancs Manteaux, 75004 Paris - Room 3</option>
                                <option value="18 rue des Blancs Manteaux, 75004 Paris - Room 4">18 rue des Blancs Manteaux, 75004 Paris - Room 4</option>
                                <option value="18 rue des Blancs Manteaux, 75004 Paris - Room 5">18 rue des Blancs Manteaux, 75004 Paris - Room 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-2 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="/CookMaster/assets/images/location/locale2.webp" class=" fit-cover img-custom" alt="...">
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold text-center">4 Rue Montorgueil, 75002 Paris</h5>
                        <div class="form-outline mb-4 mt-3">
                            <select id="location" name="location" class="form-control form-select border border-4">
                                <option selected>Select a room</option>
                                <option value="4 Rue Montorgueil, 75002 Paris-Room 1">4 Rue Montorgueil, 75002 Paris - Room 1</option>
                                <option value="4 Rue Montorgueil, 75002 Paris-Room 2">4 Rue Montorgueil, 75002 Paris - Room 2</option>
                                <option value="4 Rue Montorgueil, 75002 Paris-Room 3">4 Rue Montorgueil, 75002 Paris - Room 3</option>
                                <option value="4 Rue Montorgueil, 75002 Paris-Room 4">4 Rue Montorgueil, 75002 Paris - Room 4</option>
                                <option value="4 Rue Montorgueil, 75002 Paris-Room 5">4 Rue Montorgueil, 75002 Paris - Room 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 col-md-2 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="/CookMaster/assets/images/location/locale3.jpg" class="fit-cover img-custom" alt="...">
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold text-center">9 Rue du Temple, 75003 Paris</h5>
                        <div class="form-outline mb-4 mt-3">
                            <select id="location" name="location" class="form-control form-select border border-4">
                                <option selected>Select a room</option>
                                <option value="9 Rue du Temple, 75003 Paris-Room 1">9 Rue du Temple, 75003 Paris - Room 1</option>
                                <option value="9 Rue du Temple, 75003 Paris-Room 2">9 Rue du Temple, 75003 Paris - Room 2</option>
                                <option value="9 Rue du Temple, 75003 Paris-Room 3">9 Rue du Temple, 75003 Paris - Room 3</option>
                                <option value="9 Rue du Temple, 75003 Paris-Room 4">9 Rue du Temple, 75003 Paris - Room 4</option>
                                <option value="9 Rue du Temple, 75003 Paris-Room 5">9 Rue du Temple, 75003 Paris - Room 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4 p-4 d-flex justify-content-center">
            <div class="col-lg-4 col-sm-12 col-md-2 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="/CookMaster/assets/images/location/locale4.jpg" class="fit-cover img-custom" alt="...">
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold text-center">6 Rue Saint-Jacques, 75005 Paris</h5>
                        <div class="form-outline mb-4 mt-3">
                            <select id="location" name="location" class="form-control form-select border border-4">
                                <option selected>Select a room</option>
                                <option value="6 Rue Saint-Jacques, 75005 Paris-Room 1">6 Rue Saint-Jacques, 75005 Paris - Room 1</option>
                                <option value="6 Rue Saint-Jacques, 75005 Paris-Room 2">6 Rue Saint-Jacques, 75005 Paris - Room 2</option>
                                <option value="6 Rue Saint-Jacques, 75005 Paris-Room 3">6 Rue Saint-Jacques, 75005 Paris - Room 3</option>
                                <option value="6 Rue Saint-Jacques, 75005 Paris-Room 4">6 Rue Saint-Jacques, 75005 Paris - Room 4</option>
                                <option value="6 Rue Saint-Jacques, 75005 Paris-Room 5">6 Rue Saint-Jacques, 75005 Paris - Room 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-2 mb-4">
                <div class="card h-100 border-0 shadow-none">
                    <img src="/CookMaster/assets/images/location/locale5.webp" class="fit-cover img-custom" alt="...">
                    <div class="card-body w-100 h-100 mt-1">
                        <h5 class="card-title fw-bold text-center">9 Rue de Lyon, 75012 Paris</h5>
                        <div class="form-outline mb-4 mt-3">
                            <select id="location" name="location" class="form-control form-select border border-4">
                                <option selected>Select a room</option>
                                <option value="9 Rue de Lyon, 75012 Paris-Room 1">9 Rue de Lyon, 75012 Paris - Room 1</option>
                                <option value="9 Rue de Lyon, 75012 Paris-Room 2">9 Rue de Lyon, 75012 Paris - Room 2</option>
                                <option value="9 Rue de Lyon, 75012 Paris-Room 3">9 Rue de Lyon, 75012 Paris - Room 3</option>
                                <option value="9 Rue de Lyon, 75012 Paris-Room 4">9 Rue de Lyon, 75012 Paris - Room 4</option>
                                <option value="9 Rue de Lyon, 75012 Paris-Room 5">9 Rue de Lyon, 75012 Paris - Room 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Create Event</button>
        </div>
    </form>
</div>


<script>
    window.onload = function() {
        const selects = document.querySelectorAll('.form-select');

        selects.forEach(select => {
            select.addEventListener('change', function() {
                if (this.value != '') {
                    if (this.value == "Select a room") {
                        selects.forEach(select => {
                            select.disabled = false;
                        });
                    } else {
                        selects.forEach(select => {
                            if (select !== this) {
                                select.disabled = true;
                            }
                        });
                    }

                } else {
                    selects.forEach(select => {
                        select.disabled = false;
                    });
                }
            });
        });
    };
</script>


<?php require "../../required_pages/footer.php"; ?>