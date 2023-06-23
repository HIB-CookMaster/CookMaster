<?php
// Utilise la variable superglobale $_SERVER pour obtenir le chemin du script en cours d'exécution
$path = $_SERVER['PHP_SELF'];

// Utilise la fonction basename pour obtenir le dernier segment du chemin
$filename = basename($path, ".php");

// echo $filename;  // Affiche le nom du fichier sans l'extension .php

function checkFileName($filename){
  if($filename == "course" ||$filename == "myRecipes" || $filename == "orderToEat" || $filename == "index" || $filename == "courses" || $filename == "signup" || $filename == "login" || $filename == "events" || $filename == "subscription"){
    return true;
  } else {
    return false;
  }
}
?>



<div class="container-fluid shadow-sm p-3 rounded">
  <nav class="navbar navbar-expand-lg border-0 shadow-none">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <span class="logo-title fw-bold <?php if(!checkFileName($filename)){echo "text-light";} ?>">Foodieland<span class="text-danger">.</span></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link mx-3 <?php if(!checkFileName($filename)){echo "text-light";} ?>" href="/CookMaster/">Home</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="dropdown-toggle nav-link mx-3 <?php if(!checkFileName($filename)){echo "text-light";} ?>" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Formations
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/CookMaster/src/pages/courses.php">Courses</a></li>
                <li><a class="dropdown-item" href="/CookMaster/src/pages/graduate.php">Professional training</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 <?php if(!checkFileName($filename)){echo "text-light";} ?>" href="/CookMaster/src/pages/events.php">Events</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="dropdown-toggle nav-link mx-3 <?php if(!checkFileName($filename)){echo "text-light";} ?>" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Services
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Kitchen equipment</a></li>
                <li><a class="dropdown-item" href="/CookMaster/src/pages/location.php">Location</a></li>
                <li><a class="dropdown-item" href="/CookMaster/src/pages/orderToEat.php">Order to eat</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 <?php if(!checkFileName($filename)){echo "text-light";} ?>" href="/CookMaster/src/pages/subscription.php">Subscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 <?php if(!checkFileName($filename)){echo "text-light";} ?>" href="/CookMaster/src/test/test.php">Test</a>
          </li>
        </ul>

        <!-- Disconnected -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link bg-green text-light" href="/CookMaster/src/pages/contact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(!checkFileName($filename)){echo "text-light";} ?>" href="/CookMaster/src/pages/signup.php"><i
                class="fa-solid fa-right-to-bracket me-2"></i>Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(!checkFileName($filename)){echo "text-light";} ?>" href="/CookMaster/src/pages/login.php"><i class="fa-regular fa-user me-2"></i>Login</a>
          </li>

          <li class="nav-item">
            <button class="btn btn-primary shadow-0 border-0 bg-transparent" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
              <i class="fa-solid fa-cart-shopping <?php if(!checkFileName($filename)){echo "text-light";} else {echo "text-dark";} ?>"></i>
            </button>
          </li>

          <!-- Disconnected -->


          <!-- Connected -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
              role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://www.pngall.com/wp-content/uploads/2016/05/Man-Download-PNG.png" class="rounded-circle"
                height="22" alt="Portrait of a Woman" loading="lazy" />
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="/CookMaster/src/profil/dashboard.php">Profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">My cart</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </li>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle hidden-arrow" type="button" id="dropdownMenuButton1"
              data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fa-regular fa-bell"></i>
            </button>
            <ul class="dropdown-menu p-0" style="width: 400px" aria-labelledby="dropdownMenuButton1">
              <div class="list-group">

                <!-- Notification -->
                <a href="#" class="list-group-item list-group-item-action">

                  <div class="row d-flex">

                    <div class="col-2">
                      <img class="img-fluid rounded-2"
                        src="https://img.freepik.com/vecteurs-libre/homme-affaires-caractere-avatar-isole_24877-60111.jpg?w=2000"
                        alt="">
                    </div>

                    <div class="col-10">
                      <div class="d-flex justify-content-between h-100 align-items-center">
                        <h5 class="mb-1">FoodieLand</h5>
                        <small class="text-body-secondary">8 minutes ago</small>
                      </div>
                    </div>

                  </div>


                  <p class="mb-1 fs-6 grey mt-3">Some placeholder content in a paragraph.</p>
                  <small class="text-body-secondary fs-little grey opacity-75">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Velit reprehenderit impedit sed facere atque, autem nemo, ea iure dolorum</small>
                </a>
                <!-- Notification -->

              </div>

            </ul>
          </div>
          <!-- Connected -->



        </ul>
      </div>
    </div>
  </nav>
</div>


<!-- Shopping cart -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header border-bottom mx-3">
    <h5 class="offcanvas-title fs-6" id="offcanvasExampleLabel">Cart</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mx-3">
    <div class="d-flex flex-column">
      <div class="p-2 d-flex align-items-center border-bottom p-3 mt-3">
        <div class="position-relative">
          
          <span class="position-absolute top-0 start-0 translate-middle">
            <span class="visually-hidden">New alerts</span>
            <i class="fa-solid fa-xmark border border-light rounded-pill bg-light text-secondary px-1 card-shadow"></i>
          </span>
          <img style="height: 70px; width: 70px" src="/CookMaster/assets/images/home/recipes/cauliflower.webp"
            class=" object-fit-cover rounded-2" alt="...">
        </div>
        <div class="ms-3 align-items-start h-100 w-100 justify-content-start">
          <span class="d-block">Red Hot Tomato</span>
          <span class="d-block text-secondary-emphasis mt-2">1 x 65.00 €</span>
        </div>
      </div>



      <div class="p-2 d-flex align-items-center border-bottom p-3 mt-3">
        <div class="position-relative">
          
          <span class="position-absolute top-0 start-0 translate-middle">
            <span class="visually-hidden">New alerts</span>
            <i class="fa-solid fa-xmark border border-light rounded-pill bg-light text-secondary px-1 card-shadow"></i>
          </span>
          <img style="height: 70px; width: 70px" src="/CookMaster/assets/images/home/recipes/cauliflower.webp"
            class=" object-fit-cover rounded-2" alt="...">
        </div>
        <div class="ms-3 align-items-start h-100 w-100 justify-content-start">
          <span class="d-block">Red Hot Tomato</span>
          <span class="d-block text-secondary-emphasis mt-2">1 x 65.00 €</span>
        </div>
      </div>


      <div class="p-2 d-flex align-items-center border-bottom p-3 mt-3">
        <div class="position-relative">
          
          <span class="position-absolute top-0 start-0 translate-middle">
            <span class="visually-hidden">New alerts</span>
            <i class="fa-solid fa-xmark border border-light rounded-pill bg-light text-secondary px-1 card-shadow"></i>
          </span>
          <img style="height: 70px; width: 70px" src="/CookMaster/assets/images/home/recipes/cauliflower.webp"
            class=" object-fit-cover rounded-2" alt="...">
        </div>
        <div class="ms-3 align-items-start h-100 w-100 justify-content-start">
          <span class="d-block">Red Hot Tomato</span>
          <span class="d-block text-secondary-emphasis mt-2">1 x 65.00 €</span>
        </div>
      </div>


      <div class="p-2 d-flex align-items-center border-bottom p-3 mt-3">
        <div class="position-relative">
          
          <span class="position-absolute top-0 start-0 translate-middle">
            <span class="visually-hidden">New alerts</span>
            <i class="fa-solid fa-xmark border border-light rounded-pill bg-light text-secondary px-1 card-shadow"></i>
          </span>
          <img style="height: 70px; width: 70px" src="/CookMaster/assets/images/home/recipes/cauliflower.webp"
            class=" object-fit-cover rounded-2" alt="...">
        </div>
        <div class="ms-3 align-items-start h-100 w-100 justify-content-start">
          <span class="d-block">Red Hot Tomato</span>
          <span class="d-block text-secondary-emphasis mt-2">1 x 65.00 €</span>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-between mt-2 p-3">
      <span class="fw-bold">Subtotal : </span>
      <span class="text-success">310 €</span>
    </div>
    <div class="d-flex justify-content-between mt-2 p-3 border-top">
      <button style="background-color: #80B500" type="button" class="btn btn-success rounded-0 border-0 p-3 mt-3" onclick="redirectToCart()">VIEW CART</button>
      <button type="button" class="btn btn-dark rounded-0 rounded-0 border-0 p-3 mt-3" onclick="redirectToCheckout()">Checkout</button>
    </div>
  </div>
</div>



<script>
function redirectToCart() {
  window.location.href = "/CookMaster/src/pages/cart.php";
}


function redirectToCheckout() {
  window.location.href = "/CookMaster/src/pages/checkout.php";
}
</script>
