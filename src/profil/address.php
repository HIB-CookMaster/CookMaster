<?php require_once "../required_pages/header.php" ?>
<?php require_once "../required_pages/navbar.php" ?>
<?php require_once "./header.php" ?>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-5">
            <?php require_once "./nav.php" ?>
        </div>
        <div class="col-lg-8 mt-5">
            <div class="bg-cream p-3 mt-3">
                <span class="opacity-75">The following addresses will be used on the checkout page by default.</span>
            </div>
            <div class="row p-2 mt-3">
                <div class="col-lg-6">
                    <span class="fs-4 d-flex align-items-center">Billing address <i class="fa-solid fa-pen opacity-50 fa-2xs ms-4 pointer" data-bs-toggle="modal" data-bs-target="#billing"></i></span>
                    <div class="mt-2 d-flex flex-column fs-6">
                        <span class="opacity-75">Alain Sorriey</span>
                        <span class="opacity-75 mt-2">7 rue Jean de la bruyère, 60180, Nogent sur Oise</span>
                        <span class="opacity-75 mt-1">Mobile: 07 54 41 41 41</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="fs-4 d-flex align-items-center">Shipping address <i class="fa-solid fa-pen opacity-50 fa-2xs ms-4 pointer" data-bs-toggle="modal" data-bs-target="#shipping"></i></span>
                    <div class="mt-2 d-flex flex-column fs-6">
                        <span class="opacity-75">Alain Sorriey</span>
                        <span class="opacity-75 mt-2">7 rue Jean de la bruyère, 60180, Nogent sur Oise</span>
                        <span class="opacity-75 mt-1">Mobile: 07 54 41 41 41</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>


<!-- Modal address Start Billing -->

<!-- Modal -->
<div class="modal fade" id="billing" tabindex="-1" aria-labelledby="billing" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-cream">
                <h5 class="modal-title" id="billing">Edit billing address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-outline mb-4">
                        <input type="number" id="streetNumber" name="streetNumber" class="form-control" placeholder=""/>
                        <label class="form-label" for="form1Example1">N°</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="street" name="street" class="form-control" />
                        <label class="form-label" for="form1Example1">Street</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="cp" name="cp" class="form-control" />
                        <label class="form-label" for="form1Example1">CP</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="city" name="city" class="form-control" />
                        <label class="form-label" for="form1Example1">City</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="number" id="phone" name="phone" class="form-control" />
                        <label class="form-label" for="form1Example1">Phone Number</label>
                    </div>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Modal address Start Shipping -->
<div class="modal fade" id="shipping" tabindex="-1" aria-labelledby="shipping" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-cream">
                <h5 class="modal-title" id="billing">Edit shipping address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-outline mb-4">
                        <input type="number" id="streetNumber" name="streetNumber" class="form-control" placeholder=""/>
                        <label class="form-label" for="form1Example1">N°</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="street" name="street" class="form-control" />
                        <label class="form-label" for="form1Example1">Street</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="cp" name="cp" class="form-control" />
                        <label class="form-label" for="form1Example1">CP</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="city" name="city" class="form-control" />
                        <label class="form-label" for="form1Example1">City</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="number" id="phone" name="phone" class="form-control" />
                        <label class="form-label" for="form1Example1">Phone Number</label>
                    </div>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once "../required_pages/footer.php" ?>