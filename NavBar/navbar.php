<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BookingADoc</title>
    <link rel="icon" href="../images/LOGO.jpg" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-sm  fixed-top"
    style="color: WHITE; background-color:#02386E;"!important>
      <div class="container-fluid">
        <a class="navbar-brand" href="../HomePage/Home.php">
          <img
            src="../images/LOGO.jpg"
            alt=""
            width="40"
            height="40"
            class="d-inline-block align-text-top"
          /></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mynavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../HomePage/Home.php"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Doctors
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="../ListOfDoctors/DoctorsList.php"
                      >Doctor List</a
                    >
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="../Dr DashBoard/index.php">Dashboard</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="../Dr DashBoard/tables.php">Appointments</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="../chats/chats.php">Chat</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="../Dr.Profile/profdoc1.php">Profile</a>
                  </li>
                </ul>
              </li>
            </li>
            <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Patient
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../Patient/index.php">Profile</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="../Schedual/demo/Calender.php">Bookings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Profile Settings</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Hospitals
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../Hospitals/hospital.php">Hospital List</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../adminlogin.php">Admin Log In</a></li>
                  
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav me-right mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="
                    nav-link
                    active
                    d-grid
                    gap-2
                    d-md-flex
                    justify-content-md-end
                  "
                  aria-current="page"
                  href="../AboutUs/index.php"
                  >About Us</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="
                    nav-link
                    active
                    d-grid
                    gap-2
                    d-md-flex
                    justify-content-md-end
                  "
                  aria-current="page"
                  href="../ContactUs/index.php"
                  >Contact Us</a
                >
              </li>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="../LogInPage/login.php">
                  <button
                    class="btn btn-primary me-md-2"
                    id="btnreg"
                    type="submit"
                    style = " background-color: transparent"

                  >
                    Login / Register
                  </button>
                </a>
              </div>
            </ul>        
          </ul>
        </div>
      </div>
    </nav>

    <div class='footer'></div>
  </body>
  
</html>
