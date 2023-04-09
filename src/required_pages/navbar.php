<div class="container-fluid shadow-sm p-3 rounded">
  <nav class="navbar navbar-expand-lg border-0 shadow-none">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <span class="logo-title fw-bold">CookMaster</span>
        <img src="/CookMaster/assets/images/logo.webp" alt="Logo" width="30" height="24"
          class="d-inline-block align-text-top ms-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="/CookMaster/">Home</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="dropdown-toggle nav-link" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Formations
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/CookMaster/src/pages/courses.php">Courses</a></li>
                <li><a class="dropdown-item" href="#">Professional training</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/CookMaster/src/pages/events.php">Events</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="dropdown-toggle nav-link" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Shop
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Kitchen equipment</a></li>
                <li><a class="dropdown-item" href="#">Home tutoring</a></li>
                <li><a class="dropdown-item" href="#">Order to eat</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/CookMaster/src/pages/subscription.php">Subscription</a>
          </li>
        </ul>

        <!-- Disconnected -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/CookMaster/src/pages/signup.php"><i
                class="fa-solid fa-right-to-bracket me-2"></i>Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/CookMaster/src/pages/login.php"><i class="fa-regular fa-user me-2"></i>Login</a>
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
                <a class="dropdown-item" href="/CookMaster/src/profil/">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </li>
          <!-- Connected -->



        </ul>
      </div>
    </div>
  </nav>
</div>